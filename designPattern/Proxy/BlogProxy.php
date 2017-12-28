<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/28
 * Time: 下午6:19
 */

abstract class Articles{
    public abstract function showTitles();
    public abstract function showContents();
    public abstract function saveData();
}
class Blog extends Articles
{
    private $titles = "美食報報";
    private $contents = "整理一系列好吃的美食......";

    public function showTitles()
    {
        echo $this->titles;
    }
    public function showContents()
    {
        echo $this->contents;
    }
    public function saveData()
    {
        echo "save success.<br>";
    }
}
class BlogProxy extends Articles
{
    private $blog;

    public function showTitles()
    {
        $this->blog = new Blog();
        $this->blog->showTitles();
    }
    public function showContents()
    {
        $this->blog->showContents();
    }
    public function saveData()
    {
        $this->blog->saveData();
    }

}