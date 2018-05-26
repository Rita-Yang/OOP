<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/5/26
 * Time: 下午3:50
 */

require 'HarryPotter.php';

use PHPUnit\Framework\TestCase;

class HarryPotterExampleTest extends TestCase{

    private $HarryPotter;

    public function setUp(){
        $this->HarryPotter = new HarryPotter();
    }

    public function testBookPrice(){
        $this->assertEquals(100*1, $this->HarryPotter->getResultByNum(1));
        $this->assertEquals(100*2*0.95, $this->HarryPotter->getResultByNum(2));
        $this->assertEquals(100*3*0.9, $this->HarryPotter->getResultByNum(3));
        $this->assertEquals(100*4*0.8, $this->HarryPotter->getResultByNum(4));
        $this->assertEquals(100*10*0.75, $this->HarryPotter->getResultByNum(10));
        $this->assertEquals(0, $this->HarryPotter->getResultByNum('fdsfdsgds'));
    }

}