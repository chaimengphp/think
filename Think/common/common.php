<?php
/**
 * Created by PhpStorm.
 * User: chaimeng
 * Date: 2019/1/11
 * Time: 14:13
 */


function p($data)
{
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    if(is_string($data)){
        var_dump($data);
    }

    if(is_object($data)){
        var_dump($data);
    }
}