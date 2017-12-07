<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/8
 * Time: 上午12:06
 */
include "abstractFactoryMethod.php";
include "abstractSectionMethod.php";

$koreanArtist = new koreanFactory();
$koreanArtist->parseBySection('new');
echo "<br><br>===================<br><br>";
$koreanArtist->parseBySection('hot');