<?php
//取得POST過來的資料
$id=$_POST['id'];
$acc=$_POST['acc'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$birthday=$_POST['birthday'];

//建立連線

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

//建立更新的SQL語法
$sql="update `students` set `acc`='$acc',`pw`='$pw',`name`='$name',`email`='$email',`tel`='$tel',`birthday`='$birthday' where `id`='$id'";
//執行更新

$res=$pdo->exec($sql);

if($res>0){
//跳回會員列表
    header("location:list_user.php");

}else{
    echo "更新失敗<br>";
    echo $sql;
}



?>



?>
