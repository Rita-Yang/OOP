<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/10/6
 * Time: 下午4:25
 */

// 設計一個購物車架構，業主宣稱除了正常結帳之外，日後必須能支援多種促銷手段
// ex. 買千折百 / 特標品 88折 / 聖誕特賣
// 且多個行銷手段可以同時存在
// ex. 特標品 + 買千折百

interface ICart
{
    public function cal();
}

class Cart implements ICart
{
    protected $cart = "商品資訊";

    public function cal(){
        return $this->cart."+原始價格";
    }
}