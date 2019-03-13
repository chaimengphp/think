<?php
/**
 * Created by PhpStorm.
 * User: chaimeng
 * Date: 2019/3/13
 * Time: 17:06
 */

namespace Jiemian\JmSearch;
use Gregwar\Captcha\CaptchaBuilder;

class ElasticSearch
{
    public function match()
    {
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder;
        $builder->output();
    }
}