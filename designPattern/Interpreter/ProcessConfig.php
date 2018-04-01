<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/1
 * Time: 下午2:29
 */

class ProcessConfig{
    public function getConfig($column){
        $list = [
            'news' => [new Mark(), new Number],
            'hots' => [new Letter(), new Mark()]
        ];
        return $list[$column];
    }
}