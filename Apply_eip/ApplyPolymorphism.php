<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/9/18
 * Time: 下午2:06
 */

include "Active.php";
include "Pets.php";
include "Dogs.php";
include "Cats.php";

echo "=========NAME1==========<br>";
$myDogs = new Dogs('green');
echo $myDogs->getName();
echo "<br>=========MOVE1==========<br>";
$myDogs->move(6,2);
echo "<br>=========JUMP1==========<br>";
$height = $myDogs->jump(40);
if($height > 0){
    echo "跳了".$height."公分高";
}else{
    echo "沒有跳起來";
}
echo "<br>=========EAT1==========<br>";
$myDogs->eatFood();
echo "<br>";
$myDogs->drinkWater();

echo "<br>";
echo "<br>=========NAME2==========<br>";
$myCats = new Cats('star');
echo $myCats->getName();
echo "<br>=========MOVE2==========<br>";
$myCats->move(3,13);
echo "<br>=========JUMP2==========<br>";
$height = $myCats->jump(60);
if($height > 0){
    echo "跳了".$height."公分高";
}else{
    echo "沒有跳起來";
}
echo "<br>=========EAT2==========<br>";
$myCats->eatFood();
echo "<br>";
$myCats->drinkWater();
?>