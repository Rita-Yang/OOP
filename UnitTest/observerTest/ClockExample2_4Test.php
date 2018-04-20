<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/14
 * Time: 下午2:17
 */

require 'ClockObserver3.php';

use PHPUnit\Framework\TestCase;

class ClockExample2_4Test extends TestCase
{
    public function testClockDriver() {
        $timeSource = new MockTimeSource();
        $timeSink = new MockTimeSink();
        $timeSink2 = new MockTimeSink();
        //$clockDriver = new ClockDriver($timeSource, $timeSink);
        $timeSource->setObservers($timeSink);
        $timeSource->setObservers($timeSink2);

        $timeSource->setTime(0,15,30,50);
        $this->assertEquals(15, $timeSink->getHour());
        $this->assertEquals(30, $timeSink->getMin());
        $this->assertEquals(50, $timeSink->getSec());

        $timeSource->setTime(1,4,5,6);
        $this->assertEquals(4, $timeSink2->getHour());
        $this->assertEquals(5, $timeSink2->getMin());
        $this->assertEquals(6, $timeSink2->getSec());
    }
}