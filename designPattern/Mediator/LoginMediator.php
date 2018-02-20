<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/2/20
 * Time: 下午5:06
 */

class LoginMediator
{
    public function getBtnStatus($nameStatus, $pwdStatus){
        if($this->isAllInput($nameStatus, $pwdStatus)){
            return 'true';
        }else{
            return 'false';
        }
    }
    private function isAllInput($nameStatus, $pwdStatus){
        if($this->isNotNull($nameStatus) && $this->isNotNull($pwdStatus)){
            return true;
        }else{
            return false;
        }
    }
    private function isNotNull($v){
        if($v != null){
            return true;
        }else{
            return false;
        }
    }
}
abstract class LoginStatus{
    abstract public function getStatus();
}
class Username extends LoginStatus{
    private $username;

    public function __construct($name){
        $this->username = $name;
    }
    public function getStatus(){
        if(!empty($this->username))
            return true;
        else
            return false;
    }
}
class Password extends LoginStatus{
    private $password;

    public function __construct($pwd){
        $this->password = $pwd;
    }
    public function getStatus(){
        if(!empty($this->password))
            return true;
        else
            return false;
    }
}