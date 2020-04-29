<h1>資料庫的連線</h1>
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=tatuang";
$pdo=new PDO($dsn, 'root', '');

$sql="select * from employee";
$rows=$pdo->query($sql)->fetchALL();

echo $rows[1]['姓名'];
echo "<hr>";
echo "<pre>";
print_r($rows);
echo "</pre>";



?>