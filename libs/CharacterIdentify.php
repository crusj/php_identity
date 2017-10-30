<?php
    /**
     * Created by PhpStorm.
     * User: lance
     * Date: 2017/10/30
     * Time: 15:12
     */

    namespace php_identify\libs;

    /**
     * 性格
     * Class CharacterIdentify
     * @package php_identify\libs
     */
    class CharacterIdentify extends Identify
    {
        protected $s_name = "性格";

        public function set() {
            $a_data = [
                0  => '内心软弱、多愁善感',
                1  => '开朗乐观，非常有自信，会享受生活，但做事缺乏耐心',
                2  => '懒惰',
                3  => '善于交际，组织能力强',
                4  => '善于理财，但容易感到寂寞，害怕孤独',
                5  => '不轻言放弃，但有时过于顽固。',
                6  => '感情丰富，具有亲和力，但有时非常情绪化，态度让人捉摸不透',
                7  => '务实，做事冷静、有计划，不怕艰苦，但自尊心强，有些守旧。',
                8  => '多情善感，机智敏捷',
                9  => '较强的耐心和自制力',
                10 => '坚韧不拔',
            ];
            $this->o_decorate->a_msg[$this->s_name] = $a_data[array_rand($a_data)];
        }
    }