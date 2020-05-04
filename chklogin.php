<?php
include "dbconnect.php";
//include("dbconnect.php");

if(!empty($_POST['acc'])){
    echo "有送出資料";
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    $sql="select * from students where `acc`='$acc'  && `pw`='$pw'";
    //$sql="select count(*) from students where `acc`='$acc'  && `pw`='$pw'";
    //$user=$pdo->query($sql)->fetch();
    $user=$pdo->query($sql)->fetchColumn();
   // echo $sql;
/* 
    if($user>0){
        echo "登入成功";
        header("location:list_user.php?id=");
    }else{
        echo "登入失敗";
        header("location:login.php?status=false");
    } */
     if(!empty($user)){
        echo "登入成功";
        header("location:list_user.php?id=".$user['id']);
    }else{
        echo "登入失敗";
        header("location:login.php?status=false");
    } 

/*     if($acc==$user['acc'] && $pw==$user['pw']){
        echo "登入成功";
    }else{
        echo "登入失敗";
    }
 */
}




?>
