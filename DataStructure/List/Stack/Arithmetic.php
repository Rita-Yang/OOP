<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/8/19
 * Time: 下午4:43
 */

//四則運算

class Arithmetic
{
    public $num = [0,1,2,3,4,5,6,7,8,9];
    public $mark = ['+','-','*','/'];
    public $stack;

    public function response($str){
        for($i = 0; $i < strlen($str); $i++){
            
        }
        return $this->stack[0];
    }
}