<?php
    /**
     * Created by PhpStorm.
     * User: lance
     * Date: 2017/10/31
     * Time: 17:18
     */

    namespace php_identify\libs;

    /**
     * 部门
     * Class DepartmentIdentify
     * @package php_identify\libs
     */
    class DepartmentIdentify extends Identify
    {
        protected $s_name="部门";
        public function set() {
            $a_data = [
                0 => '营业部',
                1 => '人力资源部',
                2 => '总务部',
                3 => '财务部',
                4 => '销售部',
                5 => '促销部',
                6 => '国际部',
                7 => '出口部',
                8 => '进口部',
                9 => '公共关系',
                10 => '广告部',
                11 => '企划部',
                12 => '产品开发部',
                13 => '研发部',
                14 => '秘书室',
                15 => '采购部',
                16 => '工程部',
                17 => '行政部',
                18 => '人力资源部',
                19 => '市场部',
                20 => '技术部',
                21 => '客服部',
                22 => '行政部',
                23 => '财务部',
                24 => '总经理室',
                25 => '副总经理室',
                26 => '总经办',
                27 => '采购部',
                28 => '研发部',
                29 => '生产部',
                30 => '销售部',
                31 => '广东业务部',
                32 => '无线事业部',
                33 => '拓展部'
            ];
            $this->o_decorate->a_msg[$this->s_name] = $a_data[array_rand($a_data)];
        }
    }