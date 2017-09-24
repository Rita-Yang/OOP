<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/9/24
 * Time: 下午2:54
 */

//no LSP
abstract class Game{
    abstract function open($success);
    abstract function play();
    abstract function close();
}
class PS4 extends Game{
    public function open($success)
    {
        if($success){
            return true;
        }else{
            return false;
        }
    }
    public function play(){
        // 玩遊戲
    }
    public function close(){
        // 退出光碟
    }
}
class Steam extends Game{
    public function open($success)
    {
        if($success){
            return true;
        }else{
            return "遊戲讀取失敗";
        }
    }
    public function play(){
        // play music
    }
    public function close(){
        // 關閉Steam視窗
    }
}
