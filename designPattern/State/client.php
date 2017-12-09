<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/8
 * Time: 下午11:34
 */

include "abstractStateMethod.php";
include "productState.php";

$state = "";
if(!empty($_GET['state']))
    $state = $_GET['state'];

$productState = new productState($state);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品列表</title>
</head>
<body>


<table border="1">
    <tr>
        <td>商品名稱</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>商品Ａ</td>
        <td><button type="button" onclick="edit()" <? $productState->getEditBtn(); ?>>編輯</button></td>
        <td><button type="button" onclick="check()" <? $productState->getCheckBtn(); ?>>審核</button></td>
        <td><button type="button" onclick="publish()" <? $productState->getPublishBtn(); ?>>上架</button></td>
        <td><button type="button" onclick="remove()" <? $productState->getRemoveBtn(); ?>>下架</button></td>
    </tr>
</table>
<script>
    function edit(){
        location.href="client.php?state=edit";
    }
    function check(){
        location.href="client.php?state=check";
    }
    function publish(){
        location.href="client.php?state=publish";
    }
    function remove(){
        location.href="client.php?state=remove";
    }
</script>
</body>
</html>
