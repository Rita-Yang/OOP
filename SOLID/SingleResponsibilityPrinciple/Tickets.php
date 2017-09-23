<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/9/23
 * Time: 下午8:37
 */

class Tickets
{
    protected $adultPrice = 300;
    protected $ticketsCount = 0;

    public function __construct($count)
    {
        $this->ticketsCount = $count;
    }
}