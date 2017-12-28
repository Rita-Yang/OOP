<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/28
 * Time: 下午3:26
 */
include "AuctionDecorator.php";

$auction = new Auction();

$YahooAuction = new YahooAuctionDeco($auction);
echo "<br>標題：".$YahooAuction->getTitle();
echo "<br>價格：".$YahooAuction->getPrice();
echo "<br><br>====================<br>";

$PCHomeAuction = new PCHomeAuctionDeco($auction);
echo "<br>標題：".$PCHomeAuction->getTitle();
echo "<br>價格：".$PCHomeAuction->getPrice();
echo "<br><br>====================<br>";

$LimitedTimeAuction = new LimitedTimeAuctionDeco($PCHomeAuction);
echo "<br>標題：".$LimitedTimeAuction->getTitle();
echo "<br>價格：".$LimitedTimeAuction->getPrice();
echo "<br><br>====================<br>";
