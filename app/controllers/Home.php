<?php

class Home extends \app\libs\Controller
{
    public function __construct()
    {
        $this->usermodel = $this->model("UserModel");
    }

    public function index($data = [])
    {

           /*\app\config\Configs::deleteUserSession("Confirmation");*/
//        $data =  $this->usermodel->getUser();
        $this->view("home/index",$data);
    }
}