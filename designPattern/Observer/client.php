<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/1/21
 * Time: 下午4:25
 */

require "Youtuber.php";
require "Observer.php";

$subA = new SubscriberA();
$subB = new SubscriberB();

$youtuber = new TGOPYoutuber();
$youtuber->setStatus('這群人的新影片發佈通知。');
echo "===新增訂閱者A,B===<br>";
$youtuber->addSubscriber($subA);
$youtuber->addSubscriber($subB);
$youtuber->notifySubscriber();
echo "<br>===訂閱者A取消訂閱===<br>";
$youtuber->setStatus('這群人的直播開始通知。');
$youtuber->removedSubscriber($subA);
$youtuber->notifySubscriber();