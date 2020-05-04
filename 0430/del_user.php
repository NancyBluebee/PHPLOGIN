<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$id=$GET['user'];

$sql="delete from studnet where `id`='id'";

$res=$pdo->exec($sql);
if($res>0){
    header("location:list_user.php");
    //echo "刪除成功";
    echo "刪除失敗";
    echo "可能原因：1.該筆資料已不存在；2.資料庫連線有問題,3.SQL語法有誤";
    echo $sql;
}


?>