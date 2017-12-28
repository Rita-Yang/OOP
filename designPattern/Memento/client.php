<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/28
 * Time: 下午6:53
 */

include "StateMemento.php";

$dataList = new DataList();
$originalState = new OriginalState('ELEN: HP-300, MP-400');
$state1 = $originalState->saveStateToStateMemento();
$dataList->add($state1);

$originalState->setState('SHALL: HP-350, MP-450');
$state2 = $originalState->saveStateToStateMemento();
$dataList->add($state2);

$originalState->setStateFromStateMemento($dataList->getMemento(1));
$result = $originalState->getState();
echo $result;
echo "<br>";
$originalState->setStateFromStateMemento($dataList->getMemento(0));
$result = $originalState->getState();
echo $result;