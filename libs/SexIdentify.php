<?php
    /**
     * Created by PhpStorm.
     * User: lance
     * Date: 2017/10/30
     * Time: 10:50
     */

    namespace php_identify\libs;

    /**
     * 性别
     * Class SexIdentify
     * @package php_identify\libs
     */
    class SexIdentify extends Identify
    {
        protected $o_decorate;
        protected $s_name="性别";
        public function set() {
            $a_sex = ["男","女"];
            $this->o_decorate->a_msg[$this->s_name] = $a_sex[array_rand($a_sex)];
        }
    }