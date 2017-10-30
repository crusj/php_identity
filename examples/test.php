<?php
    /**
     * Created by PhpStorm.
     * User: lance
     * Date: 2017/10/30
     * Time: 11:00
     */
    require_once ("../vendor/autoload.php");
    date_default_timezone_set("Asia/Shanghai");
    $o_person = new \php_identify\libs\Identify();
    //装填修饰
    $o_name = new \php_identify\libs\NameIdentify();
    $o_sex = new \php_identify\libs\SexIdentify();
    $o_idCard = new \php_identify\libs\IdCardIdentify();
    $o_number = new \php_identify\libs\NumberIdentify();
    $o_trades = new \php_identify\libs\TradesIdentify();

    //开始装饰
    $o_name->decorate($o_person);
    $o_number->decorate($o_name);
    $o_sex->decorate($o_number);
    $o_idCard->decorate($o_sex);
    $o_trades->decorate($o_idCard);
    echo '<pre>';
    $a_container = [];
    $o_trades->get($a_container);
    var_dump($a_container);
    echo '</pre>';
