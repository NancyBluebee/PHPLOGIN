
<?php
$link=mysql_connect("localhost","root","207207");//連結資料庫
header("Content-type:text/html;charset=utf-8");
if($link)
{  
//echo"連結資料庫成功";
$select=mysql_select_db("login",$link);//選擇資料庫
if($select)
{
//echo"選擇資料庫成功！";
if(isset($_POST["sub"]))
{
$name=$_POST["username"];
$password1=$_POST["password"];//獲取表單資料
$password2=$_POST["password2"];
if($name==""||$password1=="")//判斷是否填寫
{
echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."請填寫完成！"."\"".")".";"."</script>";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://127.0.0.1:8080/register.html"."\""."</script>";    
exit;
}
if($password1==$password2)//確認密碼是否正確
{
$str="select count(*) from register where username="."'"."$name"."'";
$result=mysql_query($str,$link);
$pass=mysql_fetch_row($result);
$pa=$pass[0];
if($pa==1)//判斷資料庫表中是否已存在該使用者名稱
{
echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."該使用者名稱已被註冊"."\"".")".";"."</script>";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://127.0.0.1:8080/register.html"."\""."</script>";   
exit; 
}
$sql="insert into register values("."\""."$name"."\"".","."\""."$password1"."\"".")";//將註冊資訊插入資料庫表中
//echo"$sql";
mysql_query($sql,$link);
mysql_query('SET NAMES UTF8');
$close=mysql_close($link);
if($close)
{
//echo"資料庫關閉";
//echo"註冊成功！";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://127.0.0.1:8080/return.html"."\""."</script>";    
}
}
else
{
echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."密碼不一致！"."\"".")".";"."</script>";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://127.0.0.1:8080/register.html"."\""."</script>";    
}
}
}
}
?>