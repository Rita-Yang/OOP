<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/1/21
 * Time: 下午2:28
 */

include "testQuest.php";
include "testAnswer.php";

$correct = new Correct();
$wrong = new Wrong();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>考卷批改結果</title>
</head>
<body>
    <h1>【歷史考卷】</h1>
    <h2>申論題：</h2>
    <h3>1. ..........?</h3>
    <?php echo $correct->getResult(new HistoryQuest()); ?>
    <h3>2. ...................?</h3>
    <?php echo $wrong->getResult(new HistoryQuest()); ?>
    <hr/>
    <h1>【數學考卷】</h1>
    <h2>計算題：</h2>
    <h3>1. ..........?</h3>
    <?php echo $correct->getResult(new MathQuest()); ?>
    <h4>2. ...................?</h4>
    <?php echo $wrong->getResult(new MathQuest()); ?>
</body>
</html>


