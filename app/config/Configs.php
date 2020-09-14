<?php
namespace app\config;
session_start();
class Configs
{
    public static $urlroot = "http://localhost/IYO/";

    public static function getAppRoot()
    {
        return dirname(dirname(__FILE__));
    }

    public static function setUserSession($name, $value)
    {
        if (isset($_SESSION[$name])) {
            unset($_SESSION[$name]);
        }
        $_SESSION[$name] = $value;

    }

    public static function getUserSession($name)
    {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        } else
            return FALSE;
    }

    public static function deleteUserSession($name)
    {
        unset($_SESSION[$name]);
    }

    public static function redirectPage($page)
    {
        header("Location: " . $page);
    }

    public static function rand_string($length)
    {
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#$&*";
        $size = strlen($chars);
        $str = '';
        for ($i = 0; $i < $length; $i++) {
            $str .= $chars[mt_rand(0, $size - 1)];

        }
        return $str;
    }

    public static function emailSend($confirmation_code, $email)
    {
        $to = $email;
        $subject = "Confirmation Code";
        $message = "Your confirmation code to become IYO member account is " . $confirmation_code;
        $header = "From: IYO@mtu.mm";
        $result = mail($to, $subject, $message, $header);
        return $result;


    }

    public static function sendResetCode($confirmation_code, $email)
    {
        $to = $email;
        $subject = "Reset Password Code";
        $message = "Your reset code to update your account's password is " . $confirmation_code;
        $header = "From: IYO@mtu.mm";
        $result = mail($to, $subject, $message, $header);
        return $result;


    }

    public static function setFlashMessage($name = '', $message = '')
    {
        if (!empty($name)) {
            if (!empty($message)) {

                $_SESSION[$name] = $message;
            }
        }
    }
    public static function getFlashMessage($name)
    {

return $_SESSION[$name];

    }



}




