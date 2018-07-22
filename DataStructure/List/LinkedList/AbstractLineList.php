<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/7/21
 * Time: 下午2:20
 */

abstract class AbstractLineList
{
    abstract public function create($arr);

    abstract public function clearList();

    abstract public function getElement($key);

    abstract public function insertElement($file, $key);

    abstract public function deleteElement($key);
}