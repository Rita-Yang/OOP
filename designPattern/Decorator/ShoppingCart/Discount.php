<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/10/6
 * Time: 下午4:20
 */

// 設計一個購物車架構，業主宣稱除了正常結帳之外，日後必須能支援多種促銷手段
// ex. 買千折百 / 特標品 88折 / 聖誕特賣
// 且多個行銷手段可以同時存在
// ex. 特標品 + 買千折百


abstract class DiscountDecorator implements ICart
{
    protected $cart;

    public function __construct(ICart $cart)
    {
        $this->cart = $cart;
    }

    public abstract function cal();
}

class HundredDiscount extends DiscountDecorator{
    public function cal(){
        return $this->cart->cal()."+買千折百";
    }
}

class GreenMarkDiscount extends DiscountDecorator{
    public function cal(){
        return $this->cart->cal()."+特標品 88折";
    }
}

class XmasDiscount extends DiscountDecorator{
    public function cal(){
        return $this->cart->cal()."+聖誕特賣";
    }
}