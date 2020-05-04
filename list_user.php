<?php

if(!isset($_GET['id'])){
    echo "非法登入，請回登入頁";
    echo "<a href='login.php'>登入</a>";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員列表</title>
    <style>
        table{
            border:1px solid #ccc;
            border-collapse:collapse;
            margin:auto;
        }
        table td{
            border:1px solid #ccc;
            padding:5px;
            text-align:center;
        }
    
    h1{
        text-align:center;
    }
    table button{
        padding:5px 15px;
        border-radius:5px;
    }
    </style>
</head>
<body>
<?php
include "dbconnect.php";

$sql="select * from `students` where `id`='".$_GET['id']."'";
$user=$pdo->query($sql)->fetch();

echo "<h1>歡迎".$user['name']."</h1>";

//$sql="select * from `students` order by `id` desc limit 3,3";
$sql="select * from `students`";
$rows=$pdo->query($sql)->fetchAll();
?>
<h1>會員列表</h1>
<table>
    <tr>
        <td>id</td>
        <td>帳號</td>
        <td>密碼</td>
        <td>姓名</td>
        <td>email</td>
        <td>手機</td>
        <td>生日</td>
        <td>註冊日期</td>
        <td>操作</td>
    </tr>
    <?php
    foreach($rows as $row){
        echo "<tr>";
        echo "    <td>".$row['id']."</td>";
        echo "    <td>".$row['acc']."</td>";
        echo "    <td>".$row['pw']."</td>";
        echo "    <td>".$row['name']."</td>";
        echo "    <td>".$row['email']."</td>";
        echo "    <td>".$row['tel']."</td>";
        echo "    <td>".$row['birthday']."</td>";
        echo "    <td>".$row['creat_time']."</td>";
        echo "    <td>";
        echo "<a href='edit_user.php?user=".$row['id']."'><button>編輯</button></a>";
        echo "<a href='del_user.php?user=".$row['id']."'><button>刪除</button></a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>

<div class="back">
    <a href="login.php?status=true&id=<?=$_GET['id'];?>">回登入頁</a>
</div>



</body>
</html>