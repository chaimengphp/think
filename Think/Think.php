<?php
/**
 * Created by PhpStorm.
 * User: chaimeng
 * Date: 2019/1/11
 * Time: 11:45
 */

/**
 * 定义常量
 * 启动框架
 */
// 类文件后缀
const EXT = '.class.php';
defined("THINK_PATH") or define("THINK_PATH",__DIR__."/"); //定义框架think目录
defined("ROOT_PATH") or define("ROOT_PATH",dirname($_SERVER['SCRIPT_FILENAME'])."/");//定义框架根路径
defined("APP_CORE") or define("APP_CORE",THINK_PATH.'/core/');  //定义框架核心类库
defined("RUNTIME_PATH") or define("RUNTIME_PATH",APP_PATH."/Runtime/"); //定义框架运行时的目录
defined("LOG_PATH") or define("LOG_PATH",RUNTIME_PATH."LOGS/"); //定义应用日志目录

if(APP_DEBUG){
    ini_set("display_errors","On");
}else{
    ini_set("display_errors","Off");
}

require APP_CORE."core.php";

//启动框架
\Think\core\core::run();