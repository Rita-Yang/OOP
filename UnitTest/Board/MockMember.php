<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/6/30
 * Time: 下午4:53
 */

class MockMember
{
    //初始化會員
    private $memberArr = array(
        "woman" => array(
            "1" => "板務",
            "2" => "一般會員",
            "3" => "普通會員"
        ),
        "man" => array(
            "1" => "一般會員",
            "2" => "普通會員",
            "3" => "普通會員"
        )
    );
    private $board;
    private $memberID;
    private $level;

    public function setBoard($board)
    {
        $this->board = $board;
    }

    public function setMemberID($memberID)
    {
        $this->memberID = $memberID;
    }

    public function getLevel()
    {
        $this->level = $this->memberArr[$this->board][$this->memberID];
        return $this->level;
    }
}