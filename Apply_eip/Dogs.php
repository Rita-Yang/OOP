<?php
/**
 * Created by PhpStorm.
 * User: Rita Yang
 * Date: 2017/9/18
 * Time: 下午12:42
 */

class Dogs extends Pets implements Active
{
    public function eatFood(){
        echo "汪汪".$this->getName()."吃飽了";
    }
    public function drinkWater(){
        echo "汪汪".$this->getName()."喝水了";
    }
}