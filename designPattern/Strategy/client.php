<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/8
 * Time: 下午09:06
 */

include "abstractDoor.php";

$woodDoor = new makeDoorStrategy(new woodDoor());
echo "<p>===========</p>";
$ironDoor = new makeDoorStrategy(new ironDoor());