<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/28
 * Time: 下午4:17
 */

//列出1到100
//3的倍數後面印Fizz
//5的倍數後面印Buzz
//同時是3和5的倍數後面印FizzBuzz

class FizzBuzz
{
    private $num1;
    private $num2;
    private $str;

    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    public function setStr($num){
        if($num % 3 == 0 && $num % 5 == 0){
            $this->str = 'FizzBuzz';
        }elseif ($num % 5 == 0){
            $this->str = 'Buzz';
        }elseif($num % 3 == 0){
            $this->str = 'Fizz';
        }else{
            $this->str = '';
        }
    }
    public function getResult(){
        return $this->str;
    }
    public function print()
    {
        for ($i = $this->num1; $i<=$this->num2; $i++){
            $this->setStr($i);
            echo $i.' '.$this->str.'<br>';
        }
    }

}