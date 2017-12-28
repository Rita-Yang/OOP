<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/28
 * Time: 下午4:30
 */

abstract class Command
{
    public abstract function logIn();
    public abstract function logOut();
}
class ConnectCommand extends Command
{
    private $connect;

    public function __construct(Connect $connect)
    {
        $this->connect = $connect;
    }
    public function logIn()
    {
        $this->connect->getAccount();
        $this->connect->getPwd();
        $this->connect->logIn();
    }
    public function logOut(){
        $this->connect->logOut();
    }
}
class remoteConnectCommand extends Command
{
    private $remoteConnect;

    public function __construct(RemoteConnect $remoteConnect)
    {
        $this->remoteConnect = $remoteConnect;
    }
    public function logIn()
    {
        $this->remoteConnect->getIPAddress();
        $this->remoteConnect->getAccount();
        $this->remoteConnect->getPwd();
        $this->remoteConnect->logIn();
    }
    public function logOut(){
        $this->remoteConnect->close();
    }
}