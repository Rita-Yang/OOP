<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/1/21
 * Time: 下午4:27
 */

interface Observer
{
    public function update(Youtuber $youtuber);
}
class SubscriberA implements Observer
{
    protected $status;

    public function update(Youtuber $youtuber)
    {
        $this->status = $youtuber->getStatus();
        echo "訂閱者A已收到".$this->status.'<br>';
    }
}
class SubscriberB implements Observer
{
    protected $status;

    public function update(Youtuber $youtuber)
    {
        $this->status = $youtuber->getStatus();
        echo "訂閱者B已收到".$this->status.'<br>';
    }
}