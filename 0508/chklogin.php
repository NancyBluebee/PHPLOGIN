<?php
include "dbconnect.php";


if(!empty($_POST['acc'])){
    echo "有送出資料";
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    $sql="select * from students where `acc`='$acc'  && `pw`='$pw'";

    $user=$pdo->query($sql)->fetch();
   
     if(!empty($user)){
        echo "登入成功";
/*         setcookie("id",$user['id'],time()+60*3);
        setcookie("status",'true',time()+60*3); */
        session_start();
        $_SESSION['id']=$user['id'];
        $_SESSION['status']='true';
        header("location:list_user.php");
    }else{
        echo "登入失敗";
        session_start();
        $_SESSION['status']='false';
        header("location:login.php");
    } 

}




?>