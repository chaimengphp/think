<?php
/**
 * Created by PhpStorm.
 * User: chaimeng
 * Date: 2019/1/11
 * Time: 16:16
 */

namespace Think\core;


class controller
{
    public $assign;
    public function assign($name,$value)
    {
        $this->assign[$name] = $value;
    }

    public function display($template)
    {
        $template_file = APP_PATH."view/".$template.".html";
        extract($this->assign);
        include $template_file;
    }
}