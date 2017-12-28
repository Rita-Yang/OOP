<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/28
 * Time: 下午5:19
 */

class showFacade
{
    public static function showFB(){
        $showArticle = new showArticles();
        $showFriend = new showFriends();
        $showFanPage = new showFanPages();

        $showArticle->printContents();
        $showFriend->printFriends();
        $showFanPage->printFanPages();
    }
}

class showArticles
{
    public function printContents()
    {
        echo "contents...<br>";
    }
}
class showFriends
{
    public function printFriends()
    {
        echo "friends...<br>";
    }
}
class showFanPages
{
    public function printFanPages(){
        echo "fanPages...<br>";
    }
}