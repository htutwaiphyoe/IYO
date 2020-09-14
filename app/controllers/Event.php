<?php

class Event extends \app\libs\Controller
{

    public function __construct()
    {
        if(app\config\Configs::getUserSession("Current_User") == false &&
        \app\config\Configs::getUserSession("Current_Admin") == false)
        {
            \app\config\Configs::redirectPage(\app\config\Configs::$urlroot);
        }
        else
        {
            $this->eventmodel = $this->model("EventModel");
        }

    }

    public function index()
    {


        if(isset($_POST['getData']))
        {

            $data = $this->eventmodel->getAllPostsByCategoryLimitStart(1,$_POST['start'],$_POST['limit']);
            foreach ($data as $event)
            {

               $eventArray = (array)$event;

               extract($eventArray);
                ob_start();
                require \app\config\Configs::getAppRoot()."/views/event/Loader.php";
                require \app\config\Configs::getAppRoot()."/views/event/NotiModel.php";
                $content = ob_get_contents();
                ob_get_clean();
                echo $content;

            }

            echo '<script>
    (

        function(){


            let button = document.querySelectorAll(".button");
            let close = document.querySelectorAll(".close");
            let button_arr = Array.from(button);
            let body=document.getElementById("ok");
            let close_arr = Array.from(close);
            let model = document.querySelectorAll(".bg-model");
            let model_arr = Array.from(model);
            let  content=document.querySelectorAll(".model-content");
            let content_arr=Array.from(content);
            let  closebutton =document.querySelectorAll(".btn-close");
            let closebutton_arr=Array.from(closebutton);
            for (let i = 0; i < button_arr.length; i++) {
                button_arr[i].addEventListener("click", function()
                {
                    model_arr[i].style.display ="flex";
                    model_arr[i].style.justifyContent="center";
                    model_arr[i].style.alignItems="center";
                    body.style.overflow="hidden";
                    body.style.height="100vh";
                    content_arr[i].style.position="absolute";
                    console.log("12");


                });
            }
            for (let i = 0; i < button_arr.length; i++) {
                close_arr[i].addEventListener("click", function()
                {
                    model_arr[i].style.display = "none";
                    body.style.overflow="auto";
                    body.style.height= "auto";
                });
            }
            for (let i = 0; i < button_arr.length; i++) {
                closebutton_arr[i].addEventListener("click", function()
                {
                    model_arr[i].style.display = "none";
                    body.style.overflow="auto";
                    body.style.height="auto";
                });
            }
        }

    )();
</script>';

            exit();



        }


  // $data = $this->eventmodel->getAllPostsByCategoryLimitStart(1,0,2);
//     $data = $this->eventmodel->getAllPostsByCategoryId(1);
        $this->view("event/index");



 /*$data = $this->eventmodel->getAllPostsByCategoryLimitStart();*/









    }
    public function details($params = [])
    {
        $data = $this->eventmodel->getEventById($params[0]);
        $this->view("event/details",$data);
    }
    public function create()
    {

        $data = [
            "eventid" => '',
            "eventcount" =>'',
            "title" => '',
            "description" => '',
            "speaker" => '',
            "date" => '',
            "content" => '',
            "file" => '',

        ];
        $data['eventcount'] =  $this->eventmodel->getAllPostsByCategoryId(1);

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $data['eventid'] = count($data['eventcount']) + 1;
            $data['title'] = htmlspecialchars($_POST['title'],ENT_QUOTES);
            $data['description'] = htmlspecialchars($_POST['desp'],ENT_QUOTES);
            $data['speaker'] = htmlspecialchars($_POST['speaker'],ENT_QUOTES);
            $data['date'] = htmlspecialchars($_POST['date'],ENT_QUOTES);
            $data['content'] = htmlspecialchars($_POST['content'],ENT_QUOTES);
            $data['file'] = $data['eventid']."__".$_FILES['file']['name'];
            $root = dirname(dirname(dirname(__FILE__)));
            if($this->eventmodel->insertEvent($data['title'],$data['description'],$data['speaker'],$data['date'],$data['content'],$data['file']))
            {
                move_uploaded_file($_FILES['file']['tmp_name'],$root."/public/assets/upload/".$data['file']);
                \app\config\Configs::setFlashMessage("Create_Success","Posted");

                \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."Event");
            }
            else
            {
                $this->view("event/create");
            }


        }
        else
        {
            $this->view("event/create");
        }
    }
    public function edit($params = [])
    {
        $data = [
            "event" => '',
            "title" => '',
            "description" => '',
            "speaker" => '',
            "date" => '',
            "content" => '',
            "file" => '',
        ];
        $data["event"] = $this->eventmodel->getEventById($params[0]);
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            /* $_POST  =filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);*/
             $data['title'] = htmlspecialchars($_POST['title'],ENT_QUOTES);
             $data['description'] = htmlspecialchars($_POST['desp'],ENT_QUOTES);
             $data['speaker'] = htmlspecialchars($_POST['speaker'],ENT_QUOTES);
            $data['date'] = htmlspecialchars($_POST['date'],ENT_QUOTES);
             $data['content'] = htmlspecialchars($_POST['content'],ENT_QUOTES);
             $data['file'] = $data['event']->eventid."__".$_FILES['file']['name'];
             $root = dirname(dirname(dirname(__FILE__)));
             if($this->eventmodel->updateEvent($data['event']->eventid,$data['title'],$data['description'],$data['speaker'],$data['date'],$data['content'],$data['file']))
             {
                 if($data['file'] != $data['event']->image)
                 {
                     move_uploaded_file($_FILES['file']['tmp_name'],$root."/public/assets/upload/".$data['file']);


                 }
                 \app\config\Configs::setFlashMessage("Edit_Success","Post edited");

                 \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."Event");

             }
             else
             {

                 $this->view("event/edit",$data);
             }



        }
        else
        {

            $this->view("event/edit",$data);
        }

    }
    public function delete($params = [])
    {
        if($this->eventmodel->deleteEvent($params[0]))
        {
            \app\config\Configs::setFlashMessage("Delete_Success","Post deleted");

            \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."Event");
        }
    }
    public function team()
    {
        $this->view("event/team");
    }
    public function notification($params = [])
    {
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {

            $data = [
                "event" => '',
                "email" => $_POST["hidden"]
            ];
            $data['event'] = $this->eventmodel->getEventById($params[0]);
            if($this->eventmodel->getNotificationByUser($data['event']->eventid,$data['email']) > 0)
            {
                \app\config\Configs::setFlashMessage("Noti_Exit","You've already subscribed");
                \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."Event");
            }
            else
            {
                if($this->eventmodel->getNotification($data["event"]->eventid,$data['event']->title,$data['email']))
                {
                    \app\config\Configs::setFlashMessage("Noti_Success","Thanks for your interest!");

                    \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."Event");
                }
                else
                {
                    \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."Event");
                }
            }

        }
    }
}