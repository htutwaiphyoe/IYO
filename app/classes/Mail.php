<?php


namespace app\classes;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class Mail
{
    private $mail;
    public function __construct()
    {
        $this->mail = new PHPMailer();
        $this->setUp();
    }
    public function setUp()
    {
        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $this->mail->isSMTP();
        $this->mail->Host = "smtp.gmail.com";
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'hwpjimmy2000@gmail.com';
        $this->mail->Password = 'hwp812000';
        $this->mail->Port = 587;
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        $this->mail->isHTML(true);
        $this->mail->SingleTo = true;
        $this->mail->From = "IYO@mtu.edu.mm";
        $this->mail->FromName = "The Inspiration Youth Organization - MTU";
    }
    public function sendEmail($data)
    {
      try
      {
          $this->mail->addAddress($data['address'],$data['name']);
          $this->mail->Subject = $data['subject'];
//        $this->mail->Body = makeHTMLMail($data['filename'],$data);
          $this->mail->Body = $data['content'];
          return $this->mail->send();
      }
      catch (Exception $e)
      {
          echo $e;
      }
    }
}