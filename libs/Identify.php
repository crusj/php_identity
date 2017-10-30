<?php
    /**
     * Created by PhpStorm.
     * User: lance
     * Date: 2017/10/30
     * Time: 9:57
     */

    namespace php_identify\libs;

    /**
     * 身份基类,以及身份个体
     * Class Identify
     * @package php_identify\libs
     */
    class Identify
    {
        protected $a_msg      = [];//装饰信息
        protected $o_decorate = NULL;
        const NAME ="parent";

        protected function set() {

        }

        //装饰
        public function decorate() {
            $this->set();
        }

        public function get(array &$a_container) {
            if ($this->o_decorate instanceof Identify):
                $a_container = array_merge($a_container,$this->o_decorate->a_msg);
                $this->o_decorate->get($a_container);
            endif;
        }

    }