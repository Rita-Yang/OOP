<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/6/30
 * Time: 下午4:53
 */

class Block
{
    private $startDay;
    private $endDay;
    private $memberID;

    public function setBlockDays($days)
    {
        $this->startDay = new DateTime('now');
        $day = new DateInterval('P'.$days.'D');
        $this->startDay->add($day);
        $this->endDay = $this->startDay->format("Y-m-d H:i:s");
    }

    public function setMemberID($memberID)
    {
        $this->memberID = $memberID;
    }

    public function doBlockActive()
    {
        $this->status = "普通會員";
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function recoverLevel()
    {
        $this->status = "一般會員";
    }
}