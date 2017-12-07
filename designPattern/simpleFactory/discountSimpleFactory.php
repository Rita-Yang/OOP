<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/7
 * Time: 下午10:39
 */

class discountSimpleFactory
{
    public static function selectDiscount($method, $price){

        switch ($method){
            case '開幕折抵兩百元':
                return new openingMinus($price);
                break;
            case '開幕折扣八五折':
                return new openingMultiply($price);
                break;
            default:
                return 0;
                break;
        }

    }
}