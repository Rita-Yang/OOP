<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/1
 * Time: 下午1:58
 */

abstract class IInterpreter{
    public abstract function interpreter(Context $context);
}

class Number extends IInterpreter{
    public function interpreter(Context $context){
        return preg_replace('/([0-9])/', '-', $context->getContext());
    }
}

class Mark extends IInterpreter{
    public function interpreter(Context $context){
        $original = array('<','>','[',']');
        $translate = array('(',')','{','}');
        return str_replace($original,$translate, $context->getContext());
    }
}

class Letter extends IInterpreter{
    public function interpreter(Context $context){
        return strtoupper($context->getContext());
    }
}