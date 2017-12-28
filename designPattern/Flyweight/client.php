<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/28
 * Time: 下午5:26
 */
include "loadJsonFlyweight.php";

$infiniteJson = dirname(__FILE__)."/json/infiniteCD.json";

$loadJsonFlyweight = new loadJsonFlyweight();
$infiniteJsonData = $loadJsonFlyweight->getJsonDataByStorage($infiniteJson);

echo "<br>========<br><br>";
for($i = 0; $i < count($infiniteJsonData); $i++){
    echo "title: ".$infiniteJsonData[$i]['title']."<br>";
    echo "type: ".$infiniteJsonData[$i]['type']."<br>";
    echo "Entertainment: ".$infiniteJsonData[$i]['Entertainment']."<br>";
}
echo "<br>========<br><br>";
$infiniteJsonData = $loadJsonFlyweight->getJsonDataByStorage($infiniteJson);
for($i = 0; $i < count($infiniteJsonData); $i++){
    echo "title: ".$infiniteJsonData[$i]['title']."<br>";
    echo "type: ".$infiniteJsonData[$i]['type']."<br>";
    echo "Entertainment: ".$infiniteJsonData[$i]['Entertainment']."<br>";
}
echo "<br>========<br><br>";