<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/9/18
 * Time: 下午2:10
 */

class Cats extends Pets implements Active
{
    public function eatFood(){
        echo "喵皇".$this->getName()."吃飽了";
    }
    public function drinkWater(){
        echo "喵皇".$this->getName()."喝水了";
    }
}