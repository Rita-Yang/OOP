<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/1/21
 * Time: 下午4:27
 */

interface Youtuber
{
    public function addSubscriber(Observer $observer);
    public function removedSubscriber(Observer $observer);
    public function notifySubscriber();
}

class TGOPYoutuber implements Youtuber
{
    private $subscribers = [];
    private $youtuberStatus;

    public function addSubscriber(Observer $observer)
    {
        $this->subscribers[] = $observer;
    }
    public function removedSubscriber(Observer $observer)
    {
        unset($this->subscribers[array_search($observer, $this->subscribers)]);
    }
    public function notifySubscriber()
    {
        foreach($this->subscribers as $subscriber)
        {
            $subscriber->update($this);
        }
    }
    public function setStatus($status){
        $this->youtuberStatus = $status;
    }
    public function getStatus(){
        return $this->youtuberStatus;
    }
}