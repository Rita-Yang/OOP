<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/14
 * Time: 下午2:34
 */

class ClockDriver{
    private $timeSource;
    private $timeSink;

    public function __construct($timeSource, $timeSink){
        $this->timeSource = $timeSource;
        $this->timeSink = $timeSink;
        $this->timeSource->setDriver($this);
    }
    public function update($hour, $min, $sec){
        $this->timeSink->setHour($hour);
        $this->timeSink->setMin($min);
        $this->timeSink->setSec($sec);
    }
}

interface TimeSource{
    public function setDriver($clockDriver);
}
//假的資料來源
class MockTimeSource implements TimeSource {
    private $clockDriver;

    public function setDriver($clockDriver){
        $this->clockDriver = $clockDriver;
    }
    public function setTime($hour, $min, $sec){
        $this->clockDriver->update($hour, $min, $sec);
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
//假的顯示類別
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