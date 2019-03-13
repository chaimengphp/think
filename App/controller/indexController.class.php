<?php
/**
 * Created by PhpStorm.
 * User: chaimeng
 * Date: 2019/1/11
 * Time: 15:00
 */

namespace App\controller;
use Think\core\controller;

class indexController extends controller
{
    public function index()
    {
        $this->assign("name",$_GET['name']);
        $this->display("index");
    }
}