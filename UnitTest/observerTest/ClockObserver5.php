<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/14
 * Time: 下午2:34
 */

interface Observers{
    public function update();
}

class MockTimeSink implements Observers {
    private $hour;
    private $min;
    private $sec;
    private $timeSource;

    public function __construct(TimeSource4 $timeSource){
        $this->timeSource = $timeSource;
    }
    public function update(){
        $this->hour = $this->timeSource->getHour();
        $this->min = $this->timeSource->getMin();
        $this->sec = $this->timeSource->getSec();
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

abstract class TimeSource4{
    private $clockObservers;

    public function registerObserver($clockObserver){
        $this->clockObservers[] = $clockObserver;
    }

    protected function notify($hour, $min, $sec){
        foreach ($this->clockObservers as $clockObserver) {
            $clockObserver->update($hour, $min, $sec);
        }
    }
}
class MockTimeSource extends TimeSource4 {
    public function setTime($hour, $min, $sec){
        $this->notify($hour, $min, $sec);
    }
}
