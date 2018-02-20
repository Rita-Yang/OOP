<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/2/20
 * Time: 下午5:04
 */

include 'LoginMediator.php';

$name = isset($_POST['name']) && $_POST['name'] !="" ? $_POST['name'] : null;
$pwd = isset($_POST['pwd']) && $_POST['pwd'] !="" ? $_POST['pwd'] : null;

$loginMediator = new LoginMediator();

$username = new Username($name);
$password = new Password($pwd);

$nameStatus = $username->getStatus();
$pwdStatus = $password->getStatus();

$BtnStatus = $loginMediator->getBtnStatus($nameStatus, $pwdStatus);

echo json_encode($BtnStatus, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>
