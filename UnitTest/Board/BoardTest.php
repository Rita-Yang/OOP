<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/7/13
 * Time: 上午6:52
 */

require 'MockMember.php';
require 'Permission.php';
require 'MockArticle.php';
require 'Block.php';

//製作討論區
//---------
//- 會員需分為板務1、一般會員2、普通會員3 三個等級
//- 板務能新刪修所有文章，一般會員只能新刪修自己的文章，普通會員只能觀看文章
//- 一般會員有可能因不當發言被水桶，此時就會暫時降級為普通會員，並於水桶時間結束後恢復身份
//- 板務有可能在其它討論板被水桶，但不會再自己管理的板被水桶

use PHPUnit\Framework\TestCase;

class BoardTest extends TestCase
{
    private $permission;
    private $block;

    public function setUp()
    {
        $this->mockMember = new MockMember();
        $this->permission = new Permission($this->mockMember);
        $this->mockArticle = new MockArticle($this->permission);
        $this->block = new Block($this->mockMember);
    }

    public function testPermission()
    {
        $mid = "mid_1";
        $this->permission->setBoard("woman");
        $this->permission->setMemberID($mid);
        $this->assertEquals(1, $this->permission->getPermissionID());
        $this->assertEquals("新增文章", $this->permission->getCreatePermission());
        $this->assertEquals("修改所有文章", $this->permission->getEditPermission());
        $this->assertEquals("刪除所有文章", $this->permission->getDeletePermission());
        $this->assertEquals("設定水桶時間", $this->permission->getBlockPermission());

        $mid2 = "mid_2";
        $this->permission->setBoard("woman");
        $this->permission->setMemberID($mid2);
        $this->assertEquals(2, $this->permission->getPermissionID());
        $this->assertEquals("新增文章", $this->permission->getCreatePermission());
        $this->assertEquals("修改自己的文章", $this->permission->getEditPermission());
        $this->assertEquals("刪除自己的文章", $this->permission->getDeletePermission());
        $this->assertEquals("沒有權限", $this->permission->getBlockPermission());

        $this->permission->setBoard("man");
        $this->permission->setMemberID($mid);
        $this->assertEquals(3, $this->permission->getPermissionID());
        $this->assertEquals("沒有權限", $this->permission->getCreatePermission());
        $this->assertEquals("沒有權限", $this->permission->getEditPermission());
        $this->assertEquals("沒有權限", $this->permission->getDeletePermission());
        $this->assertEquals("沒有權限", $this->permission->getBlockPermission());
    }

    public function testCreateArticle()
    {
        $this->mockArticle->setBoard("woman");
        $this->mockArticle->setTitle("title1");
        $this->mockArticle->setAuthor("mid_2");
        $this->mockArticle->setContent("content1");
        $this->assertEquals("success", $this->mockArticle->create("aid_1"));

        $this->mockArticle->setBoard("man");
        $this->mockArticle->setTitle("title1");
        $this->mockArticle->setAuthor("mid_1");
        $this->mockArticle->setContent("content1");
        $this->assertEquals("fail", $this->mockArticle->create("aid_2"));
    }

    public function testEditArticle()
    {
        $this->mockArticle->setBoard("woman");
        $this->mockArticle->setTitle("title1");
        $this->mockArticle->setUser("mid_1");
        $this->mockArticle->setContent("content1");
        $this->assertEquals("success 1", $this->mockArticle->edit("aid_1"));

        $this->mockArticle->setBoard("woman");
        $this->mockArticle->setTitle("title1");
        $this->mockArticle->setUser("mid_2");
        $this->mockArticle->setContent("content1");
        $this->assertEquals("success 2", $this->mockArticle->edit("aid_1"));

        $this->mockArticle->setBoard("man");
        $this->mockArticle->setTitle("title1");
        $this->mockArticle->setUser("mid_1");
        $this->mockArticle->setContent("content1");
        $this->assertEquals("fail", $this->mockArticle->edit("aid_2"));
    }

    public function testDeleteArticle()
    {
        $this->mockArticle->setBoard("woman");
        $this->mockArticle->setUser("mid_1");
        $this->assertEquals("success 1", $this->mockArticle->delete("aid_1"));

        $this->mockArticle->setBoard("man");
        $this->mockArticle->setUser("mid_1");
        $this->assertEquals("fail", $this->mockArticle->delete("aid_2"));
    }

    public function testBlockMember(){
        $mid2 = "mid_2";
        $days = 3;
        $this->block->setBoard("woman");
        $this->block->doBlock($mid2,$days);
        $this->assertEquals(3, $this->block->getLevel($mid2));
        $this->block->doRecover($mid2);
        $this->assertEquals(3, $this->block->getLevel($mid2));
    }

}