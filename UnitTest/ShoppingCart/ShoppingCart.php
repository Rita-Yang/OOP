<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/5/26
 * Time: 下午11:42
 */

class ShoppingCart
{
    private $level = '';
    private $totalPrice = 0;
    private $quantity = 0;

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function setTotalPrice($price)
    {
        $this->totalPrice = $price;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getDiscount()
    {
        $discount = 1;
        if($this->VIPDiscount()) {
            $discount = '0.8';
        }elseif($this->NormalDiscount()) {
            $discount = '0.85';
        }else{
            $discount = $discount;
        }
        return $discount;
    }

    public function VIPDiscount()
    {
        if($this->level === 'VIP' && $this->totalPrice >= 500){
            return true;
        }else{
            return false;
        }
    }

    public function NormalDiscount()
    {
        if($this->level === 'Normal' && $this->totalPrice >= 1000 && $this->quantity >= 5){
            return true;
        }else{
            return false;
        }
    }
}