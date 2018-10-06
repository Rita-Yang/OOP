<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/7/13
 * Time: 上午8:33
 */

class MockArticle
{
    private $articleArray = array(
        "woman" => array(
            "aid_1" => array(
                "title" => "title1",
                "author" => "mid_2",
                "content" => "content1"
            ),
            "aid_3" => array(
                "title" => "title2",
                "author" => "mid_1",
                "content" => "content2"
            ),
            "aid_4" => array(
                "title" => "title3",
                "author" => "mid_3",
                "content" => "content3"
            )

        ),
        "man" => array(
            "aid_2" => array(
                "title" => "title1",
                "author" => "mid_1",
                "content" => "content1"
            )
        )
    );
    private $mockMember;
    private $board;
    private $title;
    private $authorID;
    private $userID;
    private $content;

    public function __construct(MockMember $mockMember)
    {
        $this->mockMember = $mockMember;
    }

    public function setBoard($board)
    {
        $this->board = $board;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setAuthorID($authorID)
    {
        $this->authorID = $authorID;
    }

    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function create($aid)
    {
        $userLevel = $this->mockMember->getLevel($this->board, $this->authorID);
        if($userLevel == 1 || $userLevel == 2) {
            //新增文章
            array_push($this->articleArray[$this->board][$aid], array(
                "title" => $this->title,
                "authorID" => $this->authorID,
                "content" => $this->content
            ));
            return "success";
        }else {
            //不動作
            return "fail";

        }
    }

    public function edit($aid)
    {
        $this->authorID = $this->articleArray[$this->board][$aid]['author'];
        $userLevel = $this->mockMember->getLevel($this->board, $this->userID);
        if ($userLevel == 1) {
            //修改$aid文章
            $this->articleArray[$this->board][$aid]["title"] = $this->title;
            $this->articleArray[$this->board][$aid]["content"] = $this->content;
            return "success 1";
        } else if ($userLevel == 2 && $this->userID == $this->authorID){
            //修改$aid文章
            $this->articleArray[$this->board][$aid]["title"] = $this->title;
            $this->articleArray[$this->board][$aid]["content"] = $this->content;
            return "success 2";
        }else {
            //不動作
            return "fail";

        }
    }

    public function delete($aid)
    {
        $userLevel = $this->mockMember->getLevel($this->board, $this->userID);
        if ($userLevel == 1) {
            //刪除$aid文章
            return "success 1";
        } else if ($userLevel == 2 && $this->authorID == $this->userID){
            //刪除$aid文章
            return "success 2";
        }else {
            //不動作
            return "fail";

        }
    }
}