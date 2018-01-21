<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/1/21
 * Time: 下午2:43
 */

interface testQuest
{
    public function getCorrect(Correct $correct);
    public function getError(Wrong $wrong);
}

class HistoryQuest implements testQuest
{
    public function getCorrect(Correct $correct)
    {
        return "答案".$correct->result;
    }
    public function getError(Wrong $wrong)
    {
        return "答案".$wrong->result;
    }
}

class MathQuest implements testQuest
{
    public function getCorrect(Correct $correct)
    {
        return "計算過程".$correct->result;
    }
    public function getError(Wrong $wrong)
    {
        return "計算過程".$wrong->result;
    }
}