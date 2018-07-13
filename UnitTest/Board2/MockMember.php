<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/7/13
 * Time: 上午9:34
 */

class MockMember
{
    private $memberArray = array(
        "woman" => array(
            "mid_1" => 1,
            "mid_2" => 2,
            "mid_3" => 3,
            "mid_4" => 3
        ),
        "man" => array(
            "mid_1" => 3,
            "mid_2" => 2,
            "mid_3" => 2,
            "mid_4" => 1
        )
    );
    public function setMember($board, $memberID, $level)
    {
        array_push($this->memberArray[$board][$memberID],$level);
    }

    public function getLevel($board, $memberID)
    {
        return $this->memberArray[$board][$memberID];
    }
}