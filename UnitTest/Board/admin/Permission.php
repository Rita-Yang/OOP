<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/7/13
 * Time: 上午8:23
 */

class Permission
{
    private $board;
    private $memberID;
    private $mockMember;
    private $permissionID;

    public function __construct(MockMember $mockMember)
    {
        $this->mockMember = $mockMember;
    }

    public function setBoard($board)
    {
        $this->board = $board;
    }

    public function setMemberID($memberID)
    {
        $this->memberID = $memberID;
    }

    public function getPermissionID()
    {
        $this->mockMember = new MockMember();
        $this->permissionID = $this->mockMember->getLevel($this->board, $this->memberID);
        return $this->permissionID;
    }

    public function getCreatePermission()
    {

        switch($this->getPermissionID())
        {
            case 1:
                //開放新增文章按鈕
                return "新增文章";
                break;
            case 2:
                //開放新增文章按鈕
                return "新增文章";
                break;
            case 3:
                //關閉新增文章按鈕
                return "沒有權限";
                break;
            default:
                return "可疑身份";
                break;
        }
    }

    public function getEditPermission()
    {
        switch($this->getPermissionID())
        {
            case 1:
                //開放所有修改文章按鈕
                return "修改所有文章";
                break;
            case 2:
                //只開放此會員文章的修改文章按鈕
                return "修改自己的文章";
                break;
            case 3:
                //關閉所有修改文章按鈕
                return "沒有權限";
                break;
            default:
                return "可疑身份";
                break;
        }
    }

    public function getDeletePermission()
    {
        switch($this->getPermissionID())
        {
            case 1:
                //開放刪除文章按鈕
                return "刪除所有文章";
                break;
            case 2:
                //開放刪除自己文章的按鈕
                return "刪除自己的文章";
                break;
            case 3:
                //關閉刪除文章按鈕
                return "沒有權限";
                break;
            default:
                return "可疑身份";
                break;
        }
    }

    public function getBlockPermission()
    {
        switch($this->getPermissionID())
        {
            case 1:
                //開啟設定水桶功能
                return "設定水桶時間";
                break;
            case 2:
                //關閉設定水桶功能
                return "沒有權限";
                break;
            case 3:
                //關閉設定水桶功能
                return "沒有權限";
                break;
            default:
                return "可疑身份";
                break;
        }
    }
}