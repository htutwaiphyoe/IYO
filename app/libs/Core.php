<?php
namespace app\libs;
class Core
{
    private $classname = "home";
    private $methodname = "Index";
    private $params = [];

    public function __construct()
    {
        $this->getUrl();
    }

    public function getUrl()
    {
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';
        $url = explode("/", $url);
        if(!empty($url[0]))
        {
            if(file_exists("../app/controllers/".ucfirst($url[0]).".php"))
            {
                $this->classname = ucfirst($url[0]);
                unset($url[0]);
            }
        }
        require_once "../app/controllers/".$this->classname.".php";
        $this->classname  = new $this->classname();
        if(!empty($url[1]))
        {
            if(method_exists($this->classname,$url[1]))
            {
                $this->methodname = $url[1];
                unset($url[1]);
            }
        }
        $this->params = !empty($url) ? array_values($url) : [];
        call_user_func([$this->classname,$this->methodname],$this->params);

    }

}
