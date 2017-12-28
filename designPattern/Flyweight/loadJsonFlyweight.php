<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/28
 * Time: 下午5:28
 */

class JsonData{
    private $jsonData;

    public function __construct($file)
    {
        $content = file_get_contents($file);
        echo "<br>file_get_contents used.<br>";
        $this->jsonData = json_decode($content, true);
    }
    public function getJsonData(){
        return $this->jsonData;
    }
}
class loadJsonFlyweight
{
    private $jsonStorage;

    public function __construct()
    {
        $this->jsonStorage = array();
    }
    public function getJsonDataByStorage($file){
        if(array_key_exists($file, $this->jsonStorage) == TRUE){
            return $this->jsonStorage[$file]->getJsonData();
        }else{
            $temp = new JsonData($file);
            $this->jsonStorage[$file] = $temp;
            return $temp->getJsonData();
        }
    }
}