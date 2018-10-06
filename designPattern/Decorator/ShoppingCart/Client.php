<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/10/6
 * Time: 下午4:21
 */

// 設計一個購物車架構，業主宣稱除了正常結帳之外，日後必須能支援多種促銷手段
// ex. 買千折百 / 特標品 88折 / 聖誕特賣
// 且多個行銷手段可以同時存在
// ex. 特標品 + 買千折百

require_once "Cart.php";
require_once "Discount.php";

$cart = new Cart();
$Xmas = new XmasDiscount($cart);
$Hundred = new HundredDiscount($Xmas);
echo $Hundred->cal();