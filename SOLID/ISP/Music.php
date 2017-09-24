<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/9/24
 * Time: 下午3:53
 */

//no ISP
interface Media
{
    public function putIn();
    public function load();
    public function play();
    public function stop();
    public function dropOut();
}
class MP3Player implements Media {
    public function putIn()
    {
        // no disk
    }
    public function load(){
        // load .mp3
    }
    public function play()
    {
        // play music
    }
    public function stop()
    {
        // stop music
    }
    public function dropOut()
    {
        // no disk
    }
}


//ISP
interface Disk{
    public function putIn();
    public function dropOut();
}
interface Mp3{
    public function load();
    public function play();
    public function stop();
}
class NewMP3Player implements Mp3{
    public function load()
    {
        // load .mp3
    }
    public function play()
    {
        // play music
    }
    public function stop()
    {
        // stop music
    }
}