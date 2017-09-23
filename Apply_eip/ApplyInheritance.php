<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/9/18
 * Time: 下午2:05
 */

include "Active.php";
include "Pets.php";
include "Dogs.php";

echo "=========NAME==========<br>";
$myDogs = new Dogs('green');
echo $myDogs->getName();
echo "<br>=========MOVE==========<br>";
$myDogs->move(6,2);
echo "<br>=========JUMP==========<br>";
$height = $myDogs->jump(40);
if($height > 0){
    echo "跳了".$height."公分高";
}else{
    echo "沒有跳起來";
}
echo "<br>=========EAT==========<br>";
$myDogs->eatFood();
$myDogs->drinkWater();
?>