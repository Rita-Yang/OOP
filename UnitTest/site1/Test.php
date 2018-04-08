<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/3/17
 * Time: 下午3:09
 */
require '../vendor/autoload.php';
require 'SubjectOne.php';

class Test extends \PHPUnit\Framework\TestCase {
    public function testGetSquare(){
        $test = 2;
        $expect = 4;
        $method = new SubjectOne();
        $this->assertEquals($expect, $method->getSquare($test));
    }
}