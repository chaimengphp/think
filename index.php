<?php
/**
 * Created by PhpStorm.
 * User: chaimeng
 * Date: 2019/1/11
 * Time: 11:30
 */

/**
 * 定义项目目录
 * 开启debug
 * 启动框框
 */

if(version_compare(PHP_VERSION,"5.3.0","<")) die("php-version 5.3.0");

define("APP_PATH",dirname(__FILE__)."/App/");
define("APP_DEBUG",true);

//引入框架入口文件
require "Think/Think.php";