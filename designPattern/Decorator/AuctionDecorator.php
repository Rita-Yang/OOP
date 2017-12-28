<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/28
 * Time: 下午3:37
 */

interface InternetAuction
{
    public function getTitle();
    public function getPrice();
}
class Auction implements InternetAuction
{
    public function getTitle()
    {
        return "收納櫃";
    }
    public function getPrice()
    {
        return 599;
    }
}
abstract class AuctionDecorator implements InternetAuction
{
    protected $IAuction;

    public function __construct(InternetAuction $IAuction)
    {
        $this->IAuction = $IAuction;
    }
    public abstract function getTitle();
    public abstract function getPrice();
}
class YahooAuctionDeco extends AuctionDecorator
{
    public function getTitle(){
        return "《奇摩拍賣》".$this->IAuction->getTitle();
    }
    public function getPrice(){
        return $this->IAuction->getPrice();
    }
}
class PCHomeAuctionDeco extends AuctionDecorator
{
    public function getTitle(){
        return "＝24hr＝".$this->IAuction->getTitle();
    }
    public function getPrice(){
        return $this->IAuction->getPrice();
    }
}
class LimitedTimeAuctionDeco extends AuctionDecorator
{
    public function getTitle(){
        return "【限時特價】".$this->IAuction->getTitle();
    }
    public function getPrice(){
        return round(0.8 * $this->IAuction->getPrice());
    }
}