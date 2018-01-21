<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/1/21
 * Time: 下午2:41
 */

interface testAnswer
{
    public function getResult(testQuest $visitor);
}

class Correct implements testAnswer
{
    public $result = "正確";

    public function getResult(testQuest $visitor)
    {
        return $visitor->getCorrect($this);
    }
}

class Wrong implements testAnswer
{
    public $result = "錯誤";

    public function getResult(testQuest $visitor)
    {
        return $visitor->getError($this);
    }
}