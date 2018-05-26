<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/5/26
 * Time: 下午11:42
 */

require 'ShoppingCart.php';

use PHPUnit\Framework\TestCase;

class shoppingCartTest extends TestCase {

    private $shoppingCart;

    public function setUp()
    {
        $this->shoppingCart = new ShoppingCart();
    }

    public function testDiscount()
    {
        $this->shoppingCart->setLevel('VIP');
        $this->shoppingCart->setTotalPrice(500);
        $this->shoppingCart->setQuantity(5);
        $this->assertEquals('0.8', $this->shoppingCart->getDiscount());

        $this->shoppingCart->setLevel('Normal');
        $this->shoppingCart->setTotalPrice(1050);
        $this->shoppingCart->setQuantity(6);
        $this->assertEquals('0.85', $this->shoppingCart->getDiscount());

        $this->shoppingCart->setLevel('');
        $this->shoppingCart->setTotalPrice(2000);
        $this->shoppingCart->setQuantity(10);
        $this->assertEquals('1.0', $this->shoppingCart->getDiscount());
    }
}