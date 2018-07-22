<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/7/21
 * Time: 下午3:52
 */

require_once "AbstractLinkedList.php";
require_once "LinkedList.php";
require_once "Node.php";

$list = new LinkedList();
$arr = array(3,4,5,6,7,8);
echo "======create======";
$list->create($arr);
$list->printList();
echo "======insert======";
$list->insertElement(5,13);
$list->printList();
echo "======delete=======";
$list->deleteElement(5);
$list->printList();
echo "======getEle=======";
$list->getElement(6);
echo "======clearL=======";
$list->clearList();
$list->printList();