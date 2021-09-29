<?php

namespace chaimeng\think;

class Apple {

    public $name;
    public $color;

    public function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function prt() {
        echo '苹果手机='.$this->name.',颜色='.$this->color;
    }

}
