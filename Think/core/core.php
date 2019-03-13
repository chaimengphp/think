<?php
/**
 * Created by PhpStorm.
 * User: chaimeng
 * Date: 2019/1/11
 * Time: 11:59
 */
namespace Think\core;

class core
{
    static public function run()
    {
        //加载函数库
        require THINK_PATH."common/common.php";
        //自动加载类
        spl_autoload_register("\Think\core\core::autoload");
        //路由解析
        $route = new \Think\core\route();
        //加载控制器
        $action = $route->action;
        $controller_file = APP_PATH."controller/".$route->controller.EXT;
        if(is_file($controller_file)){
            include $controller_file;
            $ctrlclass = "\\App\\controller\\".$route->controller;
            $ctrl = new $ctrlclass();
            $ctrl->$action();
        }else{
            throw new \Exception("找不到控制器！");
        }
    }


    static public function autoload($class)
    {
        static $classMap = array();
        if(strpos($class,"Think")===false) {
            //自定义命名空间
           $path = APP_PATH."controller/";
        }else{
            $path = ROOT_PATH;
        }
        $class = str_replace("\\", "/", ROOT_PATH . $class);
        include $class.".php";
    }

    public function assign()
    {
        echo "11111";
    }

}