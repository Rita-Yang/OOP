<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/9/23
 * Time: 下午8:28
 */

include "Tickets.php";
include "AdultsTicket.php";
include "KidsTicket.php";
include "StudentsTicket.php";
include "EarlyBirdsTicket.php";
include "Others.php";

$ticketMode = 'students';
$tCount = 2;
$package = 'have';
$pCount = 1;
$dCount = 2;
$ticketsTotal = 0;
$packagesTotal = 0;

echo "<p>=======票價=======</p>";
switch ($ticketMode){
    case 'adults':
        $adultsTicket = new AdultsTicket($tCount);
        $ticketsTotal = $adultsTicket->getTotal();
        echo "$".$ticketsTotal;
        break;
    case 'kids':
        $kidsTicket = new KidsTicket($tCount);
        $ticketsTotal = $kidsTicket->getTotal();
        echo "$".$ticketsTotal;
        break;
    case 'students':
        $studentsTicket = new StudentsTicket($tCount);
        $ticketsTotal = $studentsTicket->getTotal();
        echo "$".$ticketsTotal;
        break;
    case 'earlyBirds':
        $earlyBirdsTicket = new EarlyBirdsTicket($tCount);
        $ticketsTotal = $earlyBirdsTicket->getTotal();
        echo "$".$ticketsTotal;
        break;
    default:
        break;
}
echo "<p>=======套餐=======</p>";
switch($package){
    case 'have':
        $packagesTotal = Others::getOther($pCount, $dCount);
        echo "$".$packagesTotal;
        break;
    default:
        echo "無套餐";
        break;
}
echo "<p>=======總計=======</p>";
echo "$".($ticketsTotal + $packagesTotal);
