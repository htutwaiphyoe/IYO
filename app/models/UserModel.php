<?php
class UserModel
{
    private $db;
    public function __construct()
    {
        $this->db = new \app\libs\Db();
    }
    public function getUserByEmail($email)
    {
        $state = 1;
        $this->db->query("SELECT * FROM user WHERE email=:email AND state = :state");
        $this->db->bind(":email",$email);
        $this->db->bind(":state",$state);
        return $this->db->singleSet();
    }
    public function getUserByName($name)
    {
        $this->db->query("SELECT * FROM user WHERE name=:name");
        $this->db->bind(":name",$name);
        return $this->db->singleSet();
    }
    public function registerUser($name,$email,$password)
    {
        $cost = mt_rand(4,10);
        $password = password_hash($password,PASSWORD_BCRYPT,['cost' => $cost]);
        date_default_timezone_set("Asia/Rangoon");
        $created_at = date("Y-m-d H:i:s",time());
        $this->db->query("INSERT INTO user (name,email,password,created_at) VALUES (:name,:email,:password,:created_at)");
        $this->db->bind(":name",$name);
        $this->db->bind(":email",$email);
        $this->db->bind(":password",$password);
        $this->db->bind(":created_at",$created_at);
        return $this->db->execute();
    }
    public function updateUser($email,$state)
    {
        $this->db->query("UPDATE user SET state=:state WHERE email=:email");
        $this->db->bind(":state",$state);
        $this->db->bind(":email",$email);
        return $this->db->execute();
    }
    public function updatePassword($email,$password)
    {
        $cost = mt_rand(4,10);
        $password = password_hash($password,PASSWORD_BCRYPT,['cost' => $cost]);
        $this->db->query("UPDATE user SET password=:password WHERE email=:email");
        $this->db->bind(":password",$password);
        $this->db->bind(":email",$email);
        return $this->db->execute();
    }
    public  function nameCheck($name)
    {
        if(strlen($name) >= 5)
        {
            if(preg_match("/^([a-z]+)([0-9]+)$/",$name))
            {
                return 1;
            }
            else
            {
                return 2;
            }
        }
        else
        {
            return 3;
        }

    }
    public  function passwordCheck($password)
    {
        if(strlen($password) >= 8)
        {
            if (preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*_|[^w])/",$password))
            {
                return 1;
            }
            else
            {
                return 2;
            }
        }
        else
        {
            return 3;
        }
    }
    public  function emailCheck($email)
    {
//        if(preg_match("/^([A-z0-9]+)@([a-z]+\.([a-z]{5}))$/",$email))
//        {
//            return 1;
//        }
//        else
//        {
//            return 2;
//        }
        if(filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            return 1;
        }
        else
        {
            return 2;
        }
    }
    public  function confirmPasswordCheck($password,$confirmpassword)
    {
        if(strcmp($password,$confirmpassword) == 0)
        {
            return 1;
        }
        else
        {
            return 2;
        }
    }
}