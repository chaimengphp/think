<?php
/**
 * Created by PhpStorm.
 * User: chaimeng
 * Date: 2019/1/11
 * Time: 14:19
 */
namespace Think\core;

class route
{
    public $controller;
    public $action;

    public function __construct()
    {
        $this->parse_url();
    }

    private function parse_url()
    {
        $request_uri = $_SERVER['REQUEST_URI'];
        if($request_uri == "/"){
            $this->controller = "index";
            $this->action = "index";
        }else{
            $path_info = explode("/",trim($_SERVER['PATH_INFO'],"/"));
            if($path_info[0]){
                $this->controller = $path_info[0];
                unset($path_info[0]);
            }
            if($path_info[1]){
                $this->action = $path_info[1];
                unset($path_info[1]);
            }
            $path_info = array_values($path_info);
            for($i=0;$i<count($path_info);$i+=2){
                $_GET[$path_info[$i]] = $path_info[$i+1];
            }
        }

        $this->controller = $this->controller."Controller";
    }
}