<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/8
 * Time: 下午11:18
 */

abstract class abstractStateMethod
{
    public abstract function setState();
}

class editState extends abstractStateMethod{

    private $state;

    public function __construct(productState $productState)
    {
        $this->state = $productState;
        $this->setState();
    }

    public function setState()
    {
        $this->state->setDisable("","","disabled", "disabled");
    }
}

class checkState extends abstractStateMethod{

    private $state;

    public function __construct(productState $productState)
    {
        $this->state = $productState;
        $this->setState();
    }

    public function setState()
    {
        $this->state->setDisable("","disabled","","disabled");
    }
}

class publishState extends abstractStateMethod{

    private $state;

    public function __construct(productState $productState)
    {
        $this->state = $productState;
        $this->setState();
    }

    public function setState()
    {
        $this->state->setDisable("disabled","disabled","disabled","");
    }
}

class removeState extends abstractStateMethod{

    private $state;

    public function __construct(productState $productState)
    {
        $this->state = $productState;
        $this->setState();
    }

    public function setState()
    {
        $this->state->setDisable("","","disabled","disabled");
    }
}