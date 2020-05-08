<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql="insert into students(`id`,
                        `acc`,
                        `pw`,
                        `name`,
                        `email`,
                        `tel`,
                        `creat_time`,
                        `update_time`,
                        `birthday`)
                values(null,
                        'NOCARE',
                        'nancy0201',
                        '張無忌',
                        'beekingdom0201@gmail.com',
                        '0911188868',
                        '".date("Y-m-d H:i:s")."', 
                        '".date("Y-m-d H:i:s")."',
                        '1995-06-30')";

echo $sql;
echo "<br>";
//$pdo->query($sql);
echo $pdo->exec($sql); //不回傳資料，但回傳成功或失敗（0或1）
echo "資料已新增";

?>