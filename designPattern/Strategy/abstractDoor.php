<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/8
 * Time: 下午8:59
 */

abstract class abstractDoor
{
    public abstract function makeDoor();
}

class woodDoor extends abstractDoor {
    public function makeDoor()
    {
        echo "製造木門";
    }
}

class ironDoor extends abstractDoor{
    public function makeDoor()
    {
        echo "製造鐵門";
    }
}

class makeDoorStrategy{
    private $door;

    public function __construct(abstractDoor $door)
    {
        $this->door = $door;
        $this->door->makeDoor();
    }
}