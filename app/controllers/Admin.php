<?php
class Admin extends \app\libs\Controller
{
    public function __construct()
    {
        $this->adminmodel = $this->model("AdminModel");
        $this->eventmodel = $this->model("EventModel");
        $this->mail = new \app\classes\Mail();
    }
    public function notification()
    {
        if (\app\config\Configs::getUserSession("Current_Admin") == false)
        {
            \app\config\Configs::redirectPage(\app\config\Configs::$urlroot);
        }
        else
        {

            if($_SERVER['REQUEST_METHOD'] == "GET")
            {
                $data = [
                "event" => '',
                "users" => '',

                ];


                $data['event'] = $this->adminmodel->getNotificationsByDistinct();
                $data['users'] = $this->adminmodel->getAllNotifications();


                $this->view("admin/notification",$data);
            }
            else {
                if(isset($_POST['send']))
                {
                    $mail_data = [
                        "address" => $_POST['email'],
                        "name" => "IYO",
                        "subject" => "Event Reminder",
                        "content" => "Hello, ".$_POST['email']." We know you're interested in our workshop that will be held in tomorrow. Don't forget to come and grasp the special moment with us!"
                    ];
                    if($this->mail->sendEmail($mail_data))
                    {
                        if($this->adminmodel->updateNotificationState($_POST['notiid']))
                        \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."Admin/Notification");
                    }
                }
                if(isset($_POST['remove']))
                {
                    if($this->adminmodel->deleteNotification($_POST['notiid']))
                    {
                        \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."Admin/Notification");
                    }
                }
            }
        }

    }

}