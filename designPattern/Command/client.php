<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/28
 * Time: 下午4:30
 */
include "Connect.php";
include "RemoteConnect.php";
include "Command.php";

$connectCommand = new ConnectCommand(new Connect());
$connectCommand->logIn();
$connectCommand->logOut();
echo "<br>===============<br><br>";
$remoteConnectCommand = new remoteConnectCommand(new RemoteConnect());
$remoteConnectCommand->logIn();
$remoteConnectCommand->logOut();
echo "<br>===============<br><br>";