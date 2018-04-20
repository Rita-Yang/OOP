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

class MockTimeSink implements ClockObserver {
    private $hour;
    private $min;
    private $sec;

    public function update($hour, $min, $sec){
        $this->hour = $hour;
        $this->min = $min;
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

interface TimeSource3{
    public function setObservers($clockObserver);
}
class MockTimeSource implements TimeSource3 {
    private $clockObservers = Array();

    public function setObservers($clockObserver){
        Array_push($this->clockObservers,$clockObserver);
    }
    public function setTime($index, $hour, $min, $sec){
        $this->clockObservers[$index]->update($hour, $min, $sec);
    }
}
