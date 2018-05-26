<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/5/26
 * Time: 下午4:03
 */

//有一家書店在賣哈利波特書籍系列，每一本書定價 $100 元。
//買兩本書可以打5% 的折扣、買三本書可以打 10% 的折扣、買四本書可以打 20%。
//如果買到五本可以打到 25% 的折扣。請寫出一個函式可以計算價格。

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