<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/6/30
 * Time: 下午4:54
 */

class Permission
{
    private $permissionID;

    public function setPermissionID($level)
    {
        $this->permissionID = $level;
    }

    public function getPermission()
    {
        $permissionArr= [];
        switch ($this->permissionID)
        {
            case "板務":
                $permissionArr["create"] = "新增所有文章";
                $permissionArr["edit"] = "修改所有文章";
                $permissionArr["delete"] = "刪除所有文章";
                $permissionArr["adjustMember"]["days"] = "設定水桶時間";

                break;
            case "一般會員":
                $permissionArr["create"] = "新增自己的文章";
                $permissionArr["edit"] = "修改自己的文章";
                $permissionArr["delete"] = "刪除自己的文章";
                $permissionArr["adjustMember"]["days"] = NULL;
                break;
            case "普通會員":
                $permissionArr["create"] = NULL;
                $permissionArr["edit"] = NULL;
                $permissionArr["delete"] = NULL;
                $permissionArr["adjustMember"]["days"] = NULL;
                break;
            default : exit;
        }

        return $permissionArr;
    }
}