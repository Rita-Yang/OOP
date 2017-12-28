<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/28
 * Time: 下午6:17
 */

include "BlogProxy.php";

$blogProxy = new BlogProxy();
echo $blogProxy->showTitles()."<br>";
echo $blogProxy->showContents()."<br>";
echo $blogProxy->saveData();