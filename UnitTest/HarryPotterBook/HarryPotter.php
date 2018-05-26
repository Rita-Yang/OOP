<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/5/26
 * Time: 下午4:03
 */

class HarryPotter
{

    public function getResultByNum($num){

        if($num == 1){
            $discount = 1;
        }elseif($num == 2){
            $discount = 0.95;
        }elseif($num == 3){
            $discount = 0.9;
        }elseif($num == 4){
            $discount = 0.8;
        }elseif($num >= 5){
            $discount = 0.75;
        }else{
            $discount = 0;
        }
        $price = 100 * $num * $discount;
        return $price;
    }
}