<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/9/23
 * Time: 下午8:44
 */

class AdultsTicket extends Tickets
{
    private $price = 1;
    private $total = 0;

    public function getTotal()
    {
        $this->total = $this->adultPrice * $this->price * $this->ticketsCount;
        return $this->total;
    }
}