<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/14
 * Time: 下午2:17
 */

require 'ClockObserver5.php';

use PHPUnit\Framework\TestCase;

class ClockExample5Test extends TestCase
{
    protected $timeSource;
    protected $timeSink;

// setUp是PHPUnit的建構式，不能把測試寫在裡面，只能做設定屬性。
    protected function setUp() {
        $this->timeSource = new MockTimeSource();
        $this->timeSink = new MockTimeSink();
        $this->timeSource->registerObserver($this->timeSink);
    }
    public function testTimeChange() {
        $this->timeSource->setTime(15, 30, 50);
        $this->assertTimeSinkEquals($this->timeSink, 15, 30, 50);
    }
    public function testMutipleSink() {
        $newTimeSink = new MockTimeSink();
        $this->timeSource->registerObserver($newTimeSink);
        $this->timeSource->setTime(4, 5, 6);
        $this->assertTimeSinkEquals($this->timeSink, 4, 5, 6);
        $this->assertTimeSinkEquals($newTimeSink, 4, 5, 6);
    }
    private function assertTimeSinkEquals($sink, $hour, $min, $sec) {
        $this->assertEquals($sink->getHour(), $hour);
        $this->assertEquals($sink->getMin(), $min);
        $this->assertEquals($sink->getSec(), $sec);
    }
}