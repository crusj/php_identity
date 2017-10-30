<?php
    /**
     * Created by PhpStorm.
     * User: lance
     * Date: 2017/10/30
     * Time: 15:23
     */

    namespace php_identify\libs;

    /**
     * 兴趣特长
     * Class HobbyIdentify
     * @package php_identify\libs
     */
    class HobbyIdentify extends Identify
    {
        protected $s_name ="兴趣特长";
        public function set(){
            $a_data = [
                0 => '钢琴',
                1 => '电子琴',
                2 => '小提琴',
                3 => '吉他',
                4 => '管口琴',
                5 => '长笛',
                6 => '黑管',
                7 => '圆号',
                8 => '口琴',
                9 => '大提琴',
                10 => '双簧管',
                11 => '舞蹈',
                12 => '拉丁舞',
                13 => '民舞',
                14 => '肚皮舞',
                15 => '羽毛球',
                16 => '乒乓球',
                17 => '排球',
                18 => '足球',
                19 => '篮球',
                20 => '网球',
                21 => '游泳',
                22 => '健美操',
                23 => '毽子',
                24 => '跳绳',
                25 => '空竹',
                26 => '素描',
                27 => '水粉',
                28 => '油画'
            ];
            $this->o_decorate->a_msg[$this->s_name]= $a_data[array_rand($a_data)];
        }
    }