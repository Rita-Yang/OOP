<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/2/20
 * Time: 下午12:42
 */

include 'HTMLBuilder.php';

$index = new HTMLDirector(new indexBuilder());
$index->buildPage();

echo '<br>==============<br>';

$news = new HTMLDirector(new NewsBuilder());
$news->buildPage();