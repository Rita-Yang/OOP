<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/4/1
 * Time: 下午1:33
 */

require 'Context.php';
require 'Interpreter.php';
require 'ProcessConfig.php';

$source = "[<<測試文章testABC數字也來幾個0313>>]";
echo "原始字串：".$osource."<br><br>";
$context = new Context();

$list = array(new Letter(), new Number());

foreach ($list as $k => $method) {
    $context->setContext($source);
    $source = $method->interpreter($context);
}
echo $source;

echo "<br>=============<br>";
$process = new ProcessConfig();

$list = $process->getConfig('news');

foreach ($list as $k => $method) {
    $context->setContext($source);
    $source = $method->interpreter($context);
}
echo $source;