<?php
    /**
     * Created by PhpStorm.
     * User: lance
     * Date: 2017/10/31
     * Time: 17:34
     */

    namespace php_identify\libs;

    /**
     * 帐号，柜员号
     * Class AccountIdentify
     * @package php_identify\libs
     */
    class AccountIdentify extends Identify
    {
        protected $s_name = "帐号";

        public function set() {
            $i_length = 9;
            $i_pointer = 1;
            $s_account = '';
            while ($i_pointer <= $i_length):
                $s_account .= rand(0, 9);
                $i_pointer++;
            endwhile;
            $this->o_decorate->a_msg[$this->s_name] = $s_account;

        }
    }