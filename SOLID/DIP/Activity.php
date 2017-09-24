<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/9/24
 * Time: 下午4:14
 */

//no DIP
class Discount1
{
    public function useDiscount($price){
        $discount = $price * 0.8;
        return $discount;
    }
}
class Activity1{
    public function haveDiscount($price){
        $discount1 = new Discount1();
        echo $discount1->useDiscount($price);
    }
}
$activity1 = new Activity1();
$activity1->haveDiscount(500);

echo "<p>============</p>";


//DIP
interface Discount{
    public function useDiscount($price);
}
class Discount2 implements Discount {
    public function useDiscount($price){
        $discount = $price-100;
        return $discount;
    }
}
class Discount3 implements Discount {
    public function useDiscount($price){
        $discount = $price*0.9;
        return $discount;
    }
}
class NewActivity{
    private $discount;
    public function __construct(Discount $discount)
    {
        $this->discount = $discount;
    }
    public function haveDiscount($price){
        echo $this->discount->useDiscount($price);
    }
}
$newActivity = new NewActivity(new Discount2());
$newActivity->haveDiscount(800);
echo "<p>============</p>";
$newActivity = new NewActivity(new Discount3());
$newActivity->haveDiscount(1000);
