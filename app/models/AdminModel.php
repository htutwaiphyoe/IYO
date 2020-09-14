<?php
class AdminModel
{
    private $db;
    public function __construct()
    {
        $this->db = new \app\libs\Db();
    }
    public function getAdminByEmail($email)
    {
        $this->db->query("SELECT * FROM admin WHERE email = :email");
        $this->db->bind(":email",$email);
        return $this->db->singleSet();
    }
    public function getNotificationsByDistinct()
    {
        $this->db->query("
            SELECT DISTINCT eventid,title FROM notification");

        return $this->db->multipleSet();
    }
    public function getAllNotifications()
    {

        $this->db->query("SELECT * FROM notification");

        return $this->db->multipleSet();
    }
    public function sendReminderNotification($email)
    {
        $to = $email;
        $subject = "Event Notification Alert!";
        $message = "Hello, ".$email."."." We know you're interested in our workshop that will be held in tomorrow. Don't forget to come and grasp the special moment with us!";
        $header = "From: IYO@mtu.mm";
        $result = mail($to,$subject,$message,$header);
        return $result;
    }
    public function updateNotificationState($notiid)
    {
        $state = 0;
        $this->db->query("UPDATE notification SET state=:state WHERE notiid=:notiid");
        $this->db->bind(":state",$state);
        $this->db->bind(":notiid",$notiid);
        return $this->db->execute();
    }
    public function deleteNotification($notiid)
    {
        $this->db->query("DELETE FROM notification WHERE notiid=:notiid");
        $this->db->bind(":notiid",$notiid);
        return $this->db->execute();
    }
}