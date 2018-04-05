<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/5
 * Time: 下午1:31
 */
require "ChainOfResponsibility.php";

$leaveDays = 2;
$manager = new Manager('JongYeop');
$supervisor = new Supervisor('SungKyu');
$supervisor->setUpManager($manager);
echo "請假天數：".$leaveDays."<br>";
$supervisor->checkLeave($leaveDays);
echo "<br>============<br>";
$leaveDays = 5;
echo "請假天數：".$leaveDays."<br>";
$supervisor->checkLeave($leaveDays);