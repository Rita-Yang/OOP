<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/28
 * Time: 下午6:54
 */

class StateMemento
{
    private $state;

    public function __construct($state)
    {
        $this->state = $state;
    }
    public function getState()
    {
        return $this->state;
    }
}

class OriginalState
{
    private $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    public function setState($newState)
    {
        $this->state = $newState;
    }

    public function getState()
    {
        return $this->state;
    }

    public function saveStateToStateMemento()
    {
        return new StateMemento($this->state);
    }

    public function setStateFromStateMemento(StateMemento $stateMemento)
    {
        $this->state = $stateMemento->getState();
    }
}

class DataList
{
    private $memoryList;

    public function add(StateMemento $stateMemento)
    {
        $this->memoryList[] = $stateMemento;
    }
    public function getMemento($index)
    {
        return $this->memoryList[$index];
    }
}