<?php
/**
 * Created by PhpStorm.
 * User: Rita Yang
 * Date: 2017/9/18
 * Time: 上午11:07
 */

include "Active.php";
include "Pets.php";

echo "=========NAME==========<br>";
$myPets = new Pets('infinite');
echo $myPets->getName();
echo "<br>=========MOVE==========<br>";
$myPets->move(6,9);
echo "<br>=========JUMP==========<br>";
$height = $myPets->jump(30);
if($height > 0){
    echo "跳了".$height."公分高";
}else{
    echo "沒有跳起來";
}
echo "<br>=========EAT==========<br>";
$myPets->eatFood();
?>