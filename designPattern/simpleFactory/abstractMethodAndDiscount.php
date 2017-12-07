<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/7
 * Time: 下午10:42
 */

abstract class abstractMethodAndDiscount
{
    public abstract function discount();
}

class openingMinus extends abstractMethodAndDiscount{

    private $price;
    private $coupons = 200;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function discount()
    {
        if($this->price > $this->coupons)
            return $this->price - $this->coupons;
        else
            return 0;
    }

}

class openingMultiply extends abstractMethodAndDiscount{

    private $price;
    private $coupons = 0.85;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function discount()
    {
        if($this->price >= 100)
            return $this->price * $this->coupons;
        else
            return 0;
    }

}