<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/28
 * Time: 下午4:06
 */

require 'FizzBuzz.php';

use PHPUnit\Framework\TestCase;

class FizzBuzzExample1Test extends TestCase
{
    private $FizzBuzz;

    protected function setUp(){
        $this->FizzBuzz = new FizzBuzz(1, 100);
    }

    public function testPrintNum(){
        $this->FizzBuzz->setStr(67);
        $this->assertEquals('', $this->FizzBuzz->getResult());
        $this->FizzBuzz->setStr(90);
        $this->assertEquals('FizzBuzz', $this->FizzBuzz->getResult());
        $this->FizzBuzz->setStr(6);
        $this->assertEquals('Fizz', $this->FizzBuzz->getResult());
        $this->FizzBuzz->setStr(40);
        $this->assertEquals('Buzz', $this->FizzBuzz->getResult());
    }

}