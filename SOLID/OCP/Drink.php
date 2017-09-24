<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/9/24
 * Time: 下午2:17
 */

//no OCP
class PlasticCup{
    public function useCup(){
        echo "<p>使用杯子</p>";
    }
}
class Starbucks extends PlasticCup
{
    private $plasticCup;

    public function __construct()
    {
        $this->plasticCup = new PlasticCup();
        $this->plasticCup->useCup();
    }
}
//client
$starbucks = new Starbucks();

echo "<p>============</p>";
//OCP
abstract class Cup{
    abstract function useCup();
}
class GlassCup extends Cup{
    public function useCup(){
        echo "<p>使用玻璃杯原價</p>";
    }
}
class GreenCup extends Cup{
    public function useCup()
    {
        echo "<p>使用環保杯折扣3元</p>";
    }
}
class beverages{
    private $cup;

    public function __construct(Cup $cup)
    {
        $this->cup = $cup;
        $this->cup->useCup();
    }
}
//Client
$starbucks = new beverages(new GlassCup());
$lgarashi = new beverages(new GreenCup());
