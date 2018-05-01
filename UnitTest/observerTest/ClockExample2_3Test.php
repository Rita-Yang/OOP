<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/14
 * Time: 下午2:17
 */

require 'ClockObserver2.php';

use PHPUnit\Framework\TestCase;

class ClockExample2_3Test extends TestCase
{
    protected $timeSource;
    protected $timeSink;

    protected function setUp(){
        $this->timeSource = new MockTimeSource();
        $this->timeSink = new MockTimeSink();
        $this->timeSource->setObserver($this->timeSink);
    }
    public function testClockTime() {
        $this->timeSource->setTime(15,30,50);
        $this->assertEquals(15, $this->timeSink->getHour());
        $this->assertEquals(30, $this->timeSink->getMin());
        $this->assertEquals(50, $this->timeSink->getSec());
        $this->timeSource->setTime(4,5,6);
        $this->assertEquals(4, $this->timeSink->getHour());
        $this->assertEquals(5, $this->timeSink->getMin());
        $this->assertEquals(6, $this->timeSink->getSec());
    }
}