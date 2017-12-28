<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/22
 * Time: 下午10:28
 */

class Audio
{
    private $title;
    private $composer;
    private $writer;
    private $singer;
    private $price;

    public function loadAudioData()
    {
        $this->title = "TOP SEED";
        $this->composer = "Woolliment Staff";
        $this->writer = "Nam Woo Hyun";
        $this->singer = "infinite";
        $this->price = "678";
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getComposer()
    {
        return $this->composer;
    }
    public function getWriter()
    {
        return $this->writer;
    }
    public function getSinger()
    {
        return $this->singer;
    }
    public function getPrice()
    {
        return $this->price;
    }
}