<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/1/21
 * Time: 下午3:51
 */

require "SingerPrototype.php";

$infinite = new MakeNewWorks();
$infinite->setName("INFINITE");
$infinite->setType("GROUP");
$infinite->setWorks("3rd Album 'TOP SEED'");
$infinite->getInfo();

echo "<br>======如果有用clone就不會改變原始資料======<br>";

$teenTop = clone $infinite;
$teenTop->setName("TEEN TOP");
$teenTop->setWorks("3rd Mini Album 'Crazy'");
$teenTop->getInfo();
echo "===資料不變===<br>";
$infinite->getInfo();

echo "<br>======如果沒有用clone就會改變原始資料======<br>";

$ailee = $infinite;
$ailee->setName("Ailee");
$ailee->setType("SOLO");
$ailee->setWorks("2nd Mini Album 'Heaven'");
$ailee->getInfo();
echo "===資料改變===<br>";
$infinite->getInfo();
