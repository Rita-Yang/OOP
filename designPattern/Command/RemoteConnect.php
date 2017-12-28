<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/28
 * Time: 下午4:35
 */

class RemoteConnect
{
    public function getIPAddress()
    {
        echo "122.2.45.71<br>";
    }
    public function getAccount()
    {
        echo "remoteAccount<br>";
    }
    public function getPwd()
    {
        echo "remotePassword<br>";
    }
    public function logIn()
    {
        echo "remoteSuccess<br>";
    }
    public function close()
    {
        echo "remote close!<br>";
    }
}