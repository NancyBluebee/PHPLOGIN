
<?php
　　header("Content-type:text/html;charset=utf-8");
$link=mysql_connect("localhost","root","207207");
if($link)
{
$select=mysql_select_db("login",$link);
if($select)
{
if(isset($_POST["subl"]))
{
$name=$_POST["usernamel"];
$password=$_POST["passwordl"];
if($name==""||$password=="")//判斷是否為空
{
echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."請填寫正確的資訊！"."\"".")".";"."</script>";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://127.0.0.1:8080/login.html"."\""."</script>";
exit;
}
$str="select password from register where username="."'"."$name"."'";
mysql_query('SET NAMES UTF8');20       $result=mysql_query($str,$link);
$pass=mysql_fetch_row($result);
$pa=$pass[0];
if($pa==$password)//判斷密碼與註冊時密碼是否一致
{
echo"登入成功！";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://127.0.0.1:8080/success.html"."\""."</script>";
}
{  
echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."登入失敗！"."\"".")".";"."</script>";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://127.0.0.1:8080/login.html"."