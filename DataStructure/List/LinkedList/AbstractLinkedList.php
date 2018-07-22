<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/7/23
 * Time: 上午12:40
 */

abstract class AbstractLinkedList
{
    abstract public function create($arr);

    abstract public function printList();

    abstract public function insertElement($key, $file);

    abstract public function deleteElement($key);

    abstract public function getElement($key);

    abstract public function clearList();
}