<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/9/24
 * Time: 下午1:22
 */

// no SRP
class MovieTicket
{
    public function orderTickets(){
        //訂票
    }
    public function orderPackage(){
        //訂餐
    }
    public function pay(){
        //付款
    }
    public function getTickets(){
        //取票
    }
    public function getPackage(){
        //取餐
    }
}


//SRP
interface Ticket{
    public function orderTickets();
    public function getTickets();
}
interface Package{
    public function orderPackages();
    public function getPackages();
}
interface Pay{
    public function pay();
}
class TicketsAndPackages implements Ticket, Package, Pay{
    public function orderTickets(){
        //訂票
    }
    public function orderPackages(){
        //訂餐
    }
    public function pay(){
        //付款
    }
    public function getTickets(){
        //取票
    }
    public function getPackages(){
        //取餐
    }
}

