<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/8
 * Time: 下午3:58
 */

class Singleton
{
    private static $singleton;

    private function __construct(){
        echo "run singleton.";
    }

    public static function Example(){
        if(Singleton::$singleton == null){
            Singleton::$singleton = new Singleton();
        }
        return Singleton::$singleton;
    }
}