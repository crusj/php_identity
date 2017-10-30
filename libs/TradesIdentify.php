<?php
    /**
     * Created by PhpStorm.
     * User: lance
     * Date: 2017/10/30
     * Time: 10:31
     */

    namespace php_identify\libs;

    /**
     * 行业
     * Class TradesIdentify
     * @package php_identify\libs
     */
    class TradesIdentify extends Identify
    {
        protected $o_decorate;
        const NAME = "行业";
        public function set(){
            $a_data = [
                "会计" => [
                    "会计","财务应收专员","财务助理","主办会计","总账会计"
                ],
                "销售" => [
                    "销售代表","汽车销售","网络课程销售","推广销售","电话销售","销售师傅"
                ],
                "文员" => [
                    "办公室文员","行政文员","综合文员","人事文秘文员","普通文员"
                ],
                "后勤" => [
                    "仓管员","前台接待","材料下单员","装卸工","收营员","档案管理员"
                ],
                "软件工程师" => [
                    "PHP软件工程师","JAVA软件工程师","C软件工程师","linux系统开发员","游戏开发人员",
                    "web前端工程师","c++软件工程师","HTML5开发工程师"
                ],
                "施工员" => [
                    "项目施工员","水电施工员","装饰施工员","现场施工员","防雷施工员"
                ]
            ];
            $s_trade = array_rand($a_data);
            $s_carer = $a_data[$s_trade][array_rand($a_data[$s_trade])];
            $this->o_decorate->a_msg[self::NAME] = $s_trade.'/'.$s_carer;

        }
    }