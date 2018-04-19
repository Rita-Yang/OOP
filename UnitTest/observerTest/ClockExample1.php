<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/14
 * Time: 下午1:55
 */

//廠商提供的物件(只給時間資料)
class Clock
{
    public $hour = 15;
    public $min = 15;
    public $sec = 15;
}

//做顯示介面(這寫法不ＯＫ)
class MyClock{
    private $clock;

    public function displayTime(){
        $this->clock = new Clock();
        while(true){
            $hour = $this->clock->hour;
            $min = $this->clock->min;
            $sec = $this->clock->sec;
            $this->showTime($hour, $min, $sec);
        }
    }

    public function showTime($hour, $min, $sec){
        echo "H:".$hour." M:".$min." S:".$sec;
    }
}

$myClock = new MyClock();
$myClock->displayTime();