<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/22
 * Time: 下午10:07
 */

include "Products.php";
include "Audio.php";

class productList{

    public function __construct(Products $products)
    {
        $products->loadData();
        $title = $products->getTitle();
        $author = $products->getAuthor();
        $price = $products->getPrice();

        echo $title;
        echo "<br>";
        echo $author;
        echo "<br>";
        echo "$".$price;
        echo "<br>=========================<br>";
    }

}
$productList = new productList(new BookProducts());

$audio = new AudioProductAdapter(new Audio());
$audioProductList = new productList($audio);