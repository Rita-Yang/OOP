<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/7
 * Time: 下午10:29
 */

require "abstractMethodAndDiscount.php";
include "discountSimpleFactory.php";

$item = "桌曆";
$price = 1000;
$method = "開幕折抵兩百元";

$discount = discountSimpleFactory::selectDiscount($method, $price);
$total = $discount->discount();

echo "{$item}原價{$price}元<br>";
echo "使用「{$method}」折價券<br>";
echo "折扣後總計{$total}元";

echo "<br>===========<br>";

$method = "開幕折扣八五折";

$discount = discountSimpleFactory::selectDiscount($method, $price);
$total = $discount->discount();

echo "{$item}原價{$price}元<br>";
echo "使用「{$method}」折價券<br>";
echo "折扣後總計{$total}元";
