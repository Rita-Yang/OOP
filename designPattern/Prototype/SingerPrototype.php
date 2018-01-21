<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/1/21
 * Time: 下午3:56
 */

abstract class SingerPrototype
{
    protected $name;
    protected $type;
    protected $works;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function setWorks($works)
    {
        $this->works = $works;
    }
    public abstract function getInfo();
    public abstract function __clone();
}

class MakeNewWorks extends SingerPrototype
{
    public function getInfo()
    {
        echo '歌手名稱：'.$this->name.'<br>'.
             '類型：'.$this->type.'<br>'.
             '發表作品'.$this->works.'<br>';
    }
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}