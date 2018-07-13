<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/7/13
 * Time: 上午9:17
 */

require "MockMember.php";

class Block
{
    private $board;
    private $mockMember;
    private $startDay;
    private $endDay;
    private $day;

    public function __construct(MockMember $mockMember)
    {
        $this->mockMember = $mockMember;
    }

    public function setBoard($board)
    {
        $this->board = $board;
    }

    public function doBlock($memberID, $days)
    {
        $this->mockMember->setMember($this->board, $memberID, 3);
        $this->startDay = new DateTime('now');
        $this->day = new DateInterval('P'.$days.'D');
        $this->startDay->add($this->day);
        $this->endDay = $this->startDay->format("Y-m-d H:i:s");
    }

    public function doRecover($memberID)
    {
        if($this->endDay == new DateTime('now')){
            $this->mockMember->setMember($this->board, $memberID, 2);
        }
    }

    public function getLevel($memberID)
    {
        return $this->mockMember->getLevel($this->board, $memberID);
    }
}