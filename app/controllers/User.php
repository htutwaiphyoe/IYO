<?php

use app\libs\Controller;

class User extends Controller
{
    public function __construct()
    {
        $this->usermodel = $this->model("UserModel");
        $this->adminmodel = $this->model("AdminModel");
        $this->mail = new \app\classes\Mail();
    }
    public function index()
    {
        \app\config\Configs::redirectPage(\app\config\Configs::$urlroot);
    }
    public function signup()
    {
       if($_SERVER['REQUEST_METHOD'] == "POST")
       {
           $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
           $data = [
               "name" => $_POST['name'],
               "email" => $_POST['email'],
               "password" => $_POST["password"],
               "confirmpassword" => $_POST["confirmpassword"],
               "name_error" => '',
               "email_error" => '',
               "password_error" => '',
               "confirmpassword_error" => ''
           ];

          if((($this->usermodel->nameCheck($data["name"]) == 2) || ($this->usermodel->nameCheck($data["name"]) == 3)))
           {
                   $data["name_error"] = "Username is invalid";
               if((($this->usermodel->passwordCheck($data["password"]) == 2) || ($this->usermodel->passwordCheck($data["password"]) == 3)))
               {

                   $data["password_error"] = "Password is invalid";

               }
               if($this->usermodel->emailCheck($data["email"]) == 2)
               {
                           $data["email_error"] = "Email is invalid";
               }
               if($this->usermodel->confirmPasswordCheck($data["password"],$data["confirmpassword"]) == 2)
               {
                           $data["confirmpassword_error"] = "Password does not match";
               }



               $this->view("user/signup",$data);
           }
            else
            {
                if($this->usermodel->getUserByName($data["name"]))
                {
                    $data["name_error"] = "Username already exists";
                    $this->view("user/signup",$data);
                }
                else
                {


                    if($this->usermodel->emailCheck($data["email"]) == 2)
                    {
                        $data["email_error"] = "Email is invalid";
                        if(($this->usermodel->passwordCheck($data["password"]) == 2) || ($this->usermodel->passwordCheck($data["password"]) == 3))
                        {
                            $data["password_error"] = "Password is invalid";
                        }
                        if($this->usermodel->confirmPasswordCheck($data["password"],$data["confirmpassword"]) == 2)
                        {
                            $data["confirmpassword_error"] = "Password does not match";
                        }
                        $this->view("user/signup",$data);
                    }
//                    if(($this->usermodel->passwordCheck($data["password"]) == 2) || ($this->usermodel->passwordCheck($data["password"]) == 3))
//                    {
//                        if($this->usermodel->getUserByName($data["name"]))
//                        {
//                            $data["name_error"] = "Username already exists";
//                        }
//                        $data["password_error"] = "Password is invalid";
//                        if($this->usermodel->emailCheck($data["email"]) == 2)
//                        {
//                            $data["email_error"] = "Email is invalid";
//                        }
//                        if($this->usermodel->confirmPasswordCheck($data["password"],$data["confirmpassword"]) == 2)
//                        {
//                            $data["confirmpassword_error"] = "Password does not match";
//                        }
//                        $this->view("user/signup",$data);
//                    }
//                    if($this->usermodel->emailCheck($data["email"]) == 1)
                    else
                    {
                        if(($this->usermodel->passwordCheck($data["password"]) == 2) || ($this->usermodel->passwordCheck($data["password"]) == 3))
                        {
                            $data["password_error"] = "Password is invalid";
                            $this->view("user/signup",$data);
                        }
                        else if($this->usermodel->confirmPasswordCheck($data["password"],$data["confirmpassword"]) == 2)
                        {
                            $data["confirmpassword_error"] = "Password does not match";
                            if($this->usermodel->getUserByEmail($data["email"]))
                            {
                                $data["email_error"] = "Email is already in use";

                            }
                            $this->view("user/signup",$data);
                        }
                        else
                        {
                            if($this->usermodel->getUserByEmail($data["email"]))
                            {
                                $data["email_error"] = "Email is already in use";
                                $this->view("user/signup",$data);
                            }
                            else
                            {
                                if($this->usermodel->registerUser($data["name"],$data["email"],$data["password"]))
                                {
                                    \app\config\Configs::setUserSession("Confirmation",\app\config\Configs::rand_string(5));
                                   \app\config\Configs::setUserSession("Confirm_User",$data["email"]);

                                   $mail_data = [
                                       "address" => $data['email'],
                                       "name" => "IYO",
                                       "subject" => "Confirmation Code",
                                       "content" => "Here is confirmation code to become one of the members of IYO ".\app\config\Configs::getUserSession("Confirmation")
                                   ];
                                    if ($this->mail->sendEmail($mail_data))
                                    {
                                        \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."User/Confirmation");
                                    }
                                    else
                                    {
                                        app\config\Configs::deleteUserSession("Confirmation");
                                        app\config\Configs::deleteUserSession("Confirm_User");
                                        \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."User/SignUp");

                                    }

                                }
                                else
                                {
                                    $this->view("user/signup",$data);
                                }
                            }

                        }

                    }
                }


            }



       }
       else
       {
           $this->view("user/signup");
       }
    }
    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
           $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
           $data = [
               "email" => $_POST['email'],
               "password" => $_POST['password'],
               "email_error" => '',
               "password_error" => ''
           ];
           if($this->usermodel->emailCheck($data['email']) == 2)
           {
               $data["email_error"] = "Email is incorrect!";
               if($this->usermodel->passwordCheck($data["password"]) == 3 || $this->usermodel->passwordCheck($data['password']) == 2)
               {
                   $data["password_error"] = "Password is incorrect!";
                   $this->view("user/login",$data);
               }
               $this->view("user/login",$data);
           }
           else
           {
               if($this->usermodel->passwordCheck($data["password"]) == 3 || $this->usermodel->passwordCheck($data['password']) == 2)
               {
                   $data["password_error"] = "Password is incorrect!";
                   $this->view("user/login",$data);
               }
               else
               {
                   if($this->usermodel->getUserByEmail($data["email"]))
                   {
                       $userdata = $this->usermodel->getUserByEmail($data["email"]);
                       if(password_verify($data['password'],$userdata->password))
                       {
                           \app\config\Configs::setUserSession("Current_User",$data["email"]);
                           \app\config\Configs::setFlashMessage("Login_Success","Welcome back");
                           \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."Event");

                       }
                       else
                       {
                           $data["password_error"] = "Password is incorrect!";
                           $this->view("user/login",$data);
                       }
                   }
                   if($this->adminmodel->getAdminByEmail($data["email"]))
                   {
                       $admindata = $this->adminmodel->getAdminByEmail($data["email"]);
                       if(password_verify($data["password"],$admindata->password))
                       {
                           \app\config\Configs::setUserSession("Current_Admin",$data["email"]);
                           \app\config\Configs::setFlashMessage("Login_Success","Welcome back");
                           \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."Event");
                       }
                       else
                       {
                           $data["password_error"] = "Password is incorrect!";
                           $this->view("user/login",$data);
                       }
                   }
                   else
                   {
                       $data["email_error"] = "Email is incorrect!";
                       $data["password_error"] = "Password is incorrect!";
                       $this->view("user/login",$data);
                   }
               }
           }
        }
        else
        {
            $this->view("user/login");
        }
    }
    public function confirmation()
    {
        if(\app\config\Configs::getUserSession("Confirmation") == false)
        {
            \app\config\Configs::redirectPage(\app\config\Configs::$urlroot);
        }
        else
        {
           /* \app\config\Configs::deleteUserSession("Confirmation");
            \app\config\Configs::redirectPage(\app\config\Configs::$urlroot);*/
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if(strcmp($_POST['code'],\app\config\Configs::getUserSession("Confirmation")) == 0)
                {
                    \app\config\Configs::deleteUserSession("Confirmation");

                    $this->usermodel->updateUser(\app\config\Configs::getUserSession("Confirm_User"),1);
                    \app\config\Configs::setUserSession("Current_User",\app\config\Configs::getUserSession("Confirm_User"));
                    \app\config\Configs::deleteUserSession("Confirm_User");
                    \app\config\Configs::setFlashMessage("Register_Success","Welcome to IYO");
                    \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."Event");
                }
                else
                {
                    $data["code_error"] = "Code is invalid";
                    $this->view("user/confirmation",$data);
                }
            }
            else
            {

                $this->view("user/confirmation");
            }
        }

    }
    public function logout()
    {
        \app\config\Configs::deleteUserSession("Current_User");
        \app\config\Configs::deleteUserSession("Current_Admin");
        \app\config\Configs::redirectPage(\app\config\Configs::$urlroot);
    }
    public function recovery()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
           $data = [
               'email' => $_POST['email'],
               'email_error' => ''
           ];
           if($this->usermodel->getUserByEmail($data["email"]))
           {
               \app\config\Configs::setUserSession("Reset_Code",\app\config\Configs::rand_string(5));
               \app\config\Configs::setUserSession("Reset_User",$data['email']);
               $mail_data = [
                   "address" => $data['email'],
                   "name" => "IYO",
                   "subject" => "Reset Password Code",
                   "content" => "Here is reset password code to update your account ".\app\config\Configs::getUserSession("Reset_Code")
               ];
               if($this->mail->sendEmail($mail_data))
               {
                   \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."User/Reset");
               }
               else
               {
                   \app\config\Configs::deleteUserSession("Reset_Code");
                   \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."User/Recovery");
               }

           }
           else
           {
               $data['email_error'] = "Email is invalid";
               $this->view("user/recovery",$data);
           }
        }
        else
        {
            $this->view("user/recovery");
        }
    }
    public function reset()
    {
        if(\app\config\Configs::getUserSession("Reset_Code") == false)
        {
            \app\config\Configs::redirectPage(\app\config\Configs::$urlroot);
        }
        else
        {
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                $data = [
                    "password" => $_POST['password'],
                    "confirmpassword" => $_POST['confirmpassword'],
                    "reset_code" => $_POST['code'],
                    "password_error" => '',
                    "confirmpassword_error" => '',
                    "reset_code_error" => '',

                ];
                if(strcmp(\app\config\Configs::getUserSession("Reset_Code"),$data['reset_code']) == 0)
                {
                    if($this->usermodel->passwordCheck($data['password']) == 2 ||
                        $this->usermodel->passwordCheck($data['password']) == 3)
                    {
                        $data['password_error'] = "Password is invalid";
                        if($this->usermodel->confirmPasswordCheck($data['password'],$data['confirmpassword']) == 2)
                        {
                            $data['confirmpassword_error'] = "Password does not match";
                        }
                        $this->view("user/reset",$data);

                    }
                    else
                    {
                        if($this->usermodel->confirmPasswordCheck($data['password'],$data['confirmpassword']) == 2)
                        {
                            $data['confirmpassword_error'] = "Password does not match";
                            $this->view("user/reset",$data);
                        }
                        else
                        {
                            if($this->usermodel->updatePassword(\app\config\Configs::getUserSession("Reset_User"),$data['password']))
                            {
                                \app\config\Configs::deleteUserSession("Reset_Code");
                                \app\config\Configs::deleteUserSession("Reset_User");
                                \app\config\Configs::setFlashMessage("Reset_Success","Updated");

                                \app\config\Configs::redirectPage(\app\config\Configs::$urlroot."User/Login");
                            }
                        }

                    }
                }
                else
                {
                    $data['reset_code_error'] = "Reset code is invalid";
                    if($this->usermodel->passwordCheck($data['password']) == 2 ||
                        $this->usermodel->passwordCheck($data['password']) == 3)
                    {
                        $data['password_error'] = "Password is invalid";
                        if($this->usermodel->confirmPasswordCheck($data['password'],$data['confirmpassword']) == 2)
                        {
                            $data['confirmpassword_error'] = "Password does not match";
                        }

                    }
                    else
                    {
                        if($this->usermodel->confirmPasswordCheck($data['password'],$data['confirmpassword']) == 2)
                        {
                            $data['confirmpassword_error'] = "Password does not match";

                        }

                    }
                    $this->view("user/reset",$data);
                }
            }
            else
            {
                $this->view("user/reset");
            }


        }

    }
}