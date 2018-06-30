<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/6/30
 * Time: 下午1:51
 */

//製作討論區
//---------
//- 會員需分為板務1、一般會員2、普通會員3 三個等級
//- 板務能新刪修所有文章，一般會員只能新刪修自己的文章，普通會員只能觀看文章
//- 一般會員有可能因不當發言被水桶，此時就會暫時降級為普通會員，並於水桶時間結束後恢復身份
//- 板務有可能在其它討論板被水桶，但不會再自己管理的板被水桶

require 'MockArticle.php';
require 'MockMember.php';
require 'Board.php';
require 'Block.php';
require 'Permission.php';

use PHPUnit\Framework\TestCase;

class MsgBoardTest extends TestCase{

    private $mockArticle;
    private $mockMember;
    private $block;
    private $board;
    private $permission;

    public function setUp(){
        $this->mockArticle = new MockArticle();
        $this->mockMember = new MockMember();
        $this->block = new Block();
        $this->board = new Board();
        $this->permission = new Permission();
    }

    public function testPermission(){
        $this->mockMember->setBoard("woman");
        $this->mockMember->setMemberID("1");
        $level = $this->mockMember->getLevel();
        $this->permission->setPermissionID($level);
        $permissionArr = $this->permission->getPermission();
        $this->assertEquals("新增所有文章", $permissionArr["create"]);
        $this->assertEquals("修改所有文章", $permissionArr["edit"]);
        $this->assertEquals("刪除所有文章", $permissionArr["delete"]);
        $this->assertEquals("設定水桶時間", $permissionArr["adjustMember"]["days"]);

        $this->mockMember->setBoard("man");
        $this->mockMember->setMemberID("1");
        $level = $this->mockMember->getLevel();
        $this->permission->setPermissionID($level);
        $permissionArr = $this->permission->getPermission();
        $this->assertEquals("新增自己的文章", $permissionArr["create"]);
        $this->assertEquals("修改自己的文章", $permissionArr["edit"]);
        $this->assertEquals("刪除自己的文章", $permissionArr["delete"]);
        $this->assertEquals(NULL, $permissionArr["adjustMember"]["days"]);

        $this->mockMember->setBoard("woman");
        $this->mockMember->setMemberID("3");
        $level = $this->mockMember->getLevel();
        $this->permission->setPermissionID($level);
        $permissionArr = $this->permission->getPermission();
        $this->assertEquals(NULL, $permissionArr["create"]);
        $this->assertEquals(NULL, $permissionArr["edit"]);
        $this->assertEquals(NULL, $permissionArr["delete"]);
        $this->assertEquals(NULL, $permissionArr["adjustMember"]["days"]);
    }

    public function testBlock(){
        $this->block->setBlockDays(3);
        $this->block->setMemberID("2");
        $this->block->doBlockActive();
        $this->assertEquals("普通會員",$this->block->getStatus());
        $this->block->recoverLevel();
        $this->assertEquals("一般會員",$this->block->getStatus());
    }

    public function testArticle(){
        $this->board->boardName = array(
            $this->board->articleID => $this->board->content
        );
        $this->board->create($this->board->boardName);



    }
}