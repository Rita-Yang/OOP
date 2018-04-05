<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/5
 * Time: 下午1:31
 */

abstract class Handler{
    protected $name;
    protected $upManager;

    public function Handler($name){
        $this->name = $name;
    }
    public function setUpManager(Handler $upManager){
        $this->upManager = $upManager;
    }
    public abstract function checkLeave($leaveDays);
}
class Supervisor extends Handler
{
    public function checkLeave($leaveDays)
    {
        if($leaveDays < 3){
            echo "主管核准";
        }else{
            if($this->upManager != null){
                $this->upManager->checkLeave($leaveDays);
            }
        }
    }
}
class Manager extends Handler{
    public function checkLeave($leaveDays){
        echo "經理核准";
    }
}