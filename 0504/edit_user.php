<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯會員</title>
</head>
<style>
 table{
     border-collapse:collapse;
     border:1px solid #999;
     box-shadow:0 0 5px #ccc;
 }
 table td{
     padding:5px;
     border:1px solid #ccc;
 }
 table tr:nth-child(odd){
     background:lightgreen;
 }
 table tr:hover{
     background:lightyellow;
 }
 </STYLE>
<body>
<h1>編輯會員</h1>
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$id=$_GET['user'];
$sql="select * from `students` where `id`='$id'";
$user=$pdo->query($sql)->fetch();

?>
<form action="add_user.php" method="post" class="form">
<input type="hidden" name="id" value="<?=$user['id'];?>">
<div><label for="pw">帳號：</label><input type="text" name="acc" value=""></div>
<div><label for="pw">密碼：</label><input type="password" name="pw" value=""></div>
<div><label for="name">姓名：</label><input type="text" name="name" value=""></div>
<div><label for="email">email：</label><input type="text" name="email" value=""></div>
<div><label for="tel">手機：</label><input type="text" name="tel" value=""></div>
<div><label for="birthday">生日：</label><input type="date" name="birthday" value=""></div>
<div class="">
<input type="submit" value="送出">
<input type="reset" value="重罝">
</div>


</body>
</html>