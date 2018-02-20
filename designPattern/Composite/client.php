<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/2/20
 * Time: 下午8:58
 */

include 'BookListComposite.php';

$statistics = new Book('001', '統計學');
$calculus = new Book('002', '微積分');
$function = new Book('003', '三角函數');
$math = new Categories(array($statistics, $calculus, $function), '數學');

$eng = new Book('101', '英文');
$jap = new Book('102', '日文');
$kor = new Book('103', '韓文');
$spa = new Book('104', '西班牙文');
$language = new Categories(array($eng, $jap, $kor, $spa), '語言');

$bookList = new Categories(array($math, $language), "書單");
$bookList->getIdAndName();

$bookResult = "";
$id = $_GET['id'];
if(!empty($id)){
    $result = $bookList->getBookById($id);
    if($result == NULL)
        $bookResult = "查詢結果：找無此書。";
    else
        $bookResult = "查詢結果：".$result;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>書單</title>
</head>
<body>
<p>找書：</p>
    <form action="client.php">
        <input type="text" name="id" placeholder="請輸入書號">
        <input type="submit" value="搜尋">
    </form>
    <hr>
    <div><?php echo $bookResult;?></div>
</body>
</html>
