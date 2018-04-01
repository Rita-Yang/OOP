<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/1
 * Time: 下午1:49
 */

class Context{
    private $context;

    public function setContext($context){
        $this->context = $context;
    }

    public function getContext(){
        return $this->context;
    }
}