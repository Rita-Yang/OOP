<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/9/23
 * Time: 下午8:44
 */

class KidsTicket extends Tickets
{
    private $price = 0.8;
    private $total = 0;

    public function getTotal()
    {
        $this->total = ($this->adultPrice * $this->price - 10) * $this->ticketsCount;
        return $this->total;
    }
}