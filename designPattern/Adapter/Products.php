<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/22
 * Time: 下午9:57
 */
abstract class Products
{
    public abstract function loadData();
    public abstract function getTitle();
    public abstract function getAuthor();
    public abstract function getPrice();
}

class BookProducts extends Products
{
    private $author;
    private $title;
    private $price;

    public function loadData()
    {
        $this->author = "Martin. Robert C.";
        $this->title = "Clean Code";
        $this->price = 2250;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }
    public function getPrice()
    {
        return $this->price;
    }
}

class AudioProductAdapter extends Products
{
    private $audio;

    public function __construct(Audio $audio)
    {
        $this->audio = $audio;
    }
    public function loadData()
    {
        $this->audio->loadAudioData();
    }
    public function getTitle()
    {
        return $this->audio->getTitle();
    }
    public function getAuthor()
    {
        $composer = $this->audio->getComposer();
        $writer = $this->audio->getWriter();
        $singer = $this->audio->getSinger();
        return "作曲者：".$composer."<br>作詞者：".$writer."<br>歌手：".$singer;
    }
    public function getPrice()
    {
        return $this->audio->getPrice();
    }
}