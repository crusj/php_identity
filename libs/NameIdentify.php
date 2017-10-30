<?php
    /**
     * Created by PhpStorm.
     * User: lance
     * Date: 2017/10/30
     * Time: 10:04
     */

    namespace php_identify\libs;

    /**
     * 随机姓名
     * Class NameIdentify
     * @package php_identify\libs
     */
    class NameIdentify extends Identify
    {
        protected $o_decorate;
        const NAME = '姓名';

        function set() {
            //姓
            $s_xing = file_get_contents(dirname(__DIR__) . '/data/xing.txt');
            //名
            $s_ming = file_get_contents(dirname(__DIR__) . '/data/ming.txt');
            $a_xing = explode(',', $s_xing);
            $a_ming = explode(',', $s_ming);
            $this->o_decorate->a_msg[self::NAME] = $a_xing[array_rand($a_xing)] . $a_ming[array_rand($a_ming)];
        }

    }