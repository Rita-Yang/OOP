<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/14
 * Time: 下午2:34
 */

interface ClockObserver{
    public function update($hour, $min, $sec);
}
class ClockDriver2 implements ClockObserver{
    private $timeSource;
    private $timeSink;

    public function __construct($timeSource, $timeSink){
        $this->timeSource = $timeSource;
        $this->timeSink = $timeSink;
        $this->timeSource->setObserver($this);
    }
    public function update($hour, $min, $sec){
        $this->timeSink->setHour($hour);
        $this->timeSink->setMin($min);
        $this->timeSink->setSec($sec);
    }
}

interface TimeSource2{
    public function setObserver($clockObserver);
}
class MockTimeSource implements TimeSource2 {
    private $clockObserver;

    public function setObserver($clockObserver){
        $this->clockObserver = $clockObserver;
    }
    public function setTime($hour, $min, $sec){
        $this->clockObserver->update($hour, $min, $sec);
    }
}

interface TimeSink{
    public function setHour($hour);
    public function setMin($min);
    public function setSec($sec);
    public function getHour();
    public function getMin();
    public function getSec();
}
class MockTimeSink implements TimeSink{
    private $hour;
    private $min;
    private $sec;

    public function setHour($hour){
        $this->hour = $hour;
    }
    public function setMin($min){
        $this->min = $min;
    }
    public function setSec($sec){
        $this->sec = $sec;
    }
    public function getHour(){
        return $this->hour;
    }
    public function getMin(){
        return $this->min;
    }
    public function getSec(){
        return $this->sec;
    }
}