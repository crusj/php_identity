<?php
    /**
     * Created by PhpStorm.
     * User: lance
     * Date: 2017/10/31
     * Time: 17:26
     */

    namespace php_identify\libs;

    /**
     * 随机邮件
     * Class EmailIdentify
     * @package php_identify\libs
     */
    class EmailIdentify extends Identify
    {
        protected $s_name = '电子邮件';
        public function set() {
            //邮箱头部
            $a_range = array_merge(range(0,9),range('a','z'));
            shuffle($a_range);
            $a_rand = array_slice($a_range,0,9);
            $s_head = join('',$a_rand);
            //邮箱尾部
            $a_tail = [
                '163','qq','sina','git'
            ];
            $s_tail = $a_tail[array_rand($a_tail)];

            $this->o_decorate->a_msg[$this->s_name] = $s_head.'@'.$s_tail.'.com';
        }
    }
