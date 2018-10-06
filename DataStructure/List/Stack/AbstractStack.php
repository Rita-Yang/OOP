<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/8/19
 * Time: 下午3:59
 */

abstract class AbstractStack
{
    abstract public function initStack();
    abstract public function stackPop();
    abstract public function stackPush($val);
}