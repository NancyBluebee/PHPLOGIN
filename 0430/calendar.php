<?php
// 某年
$year=$_GET['y']?$_GET{'y'}:date('Y',time());

// 某月
$month=$_GET['m']?$_GET['m']:date('m',time());

// 本月總天數
$days=date('t',strtotime("{$year}-{$month}-1"));

// 本月1號是周幾
$week=date('w',strtotime("{$year}-{$month}-1"));

// 真正的第一天
$first=1-$week;

echo $first;

//月數大於12月年+1，月變成1月
if($month>=12){
    //下一年和下一月
    $nextYear=$year+1;
    $nextMonth=1;
}else{
    //下一年和下一月
    $nextYear=$year;
    $nextMonth=$month+1;
}
//月數小於1月份時，則年-1，月變成12月
if($month<=1){
    //下一年和下一月
    $prevYear=$year-1;
    $prevMonth=12;
}else{
    //下一年和下一月
    $prevYear=$year;
    $prevMonth=$month-1;
}
?>


<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
   
    <title>萬年曆</title>
</head>
<body>
<table class="TB_COLLAPSE" cellspacing="0">
  <caption>萬年曆設計<?php echo $year ?>年-<?php echo $month ?>月</caption>
  <thead>
    <tr>
    
            <th style ='color:#FF0000'>週日</th>
            <th>週一</th>
            <th>週二</th>
            <th>週三</th>
            <th>週四</th>
            <th>週五</th>
            <th style ='color:#009100'>週六</th>
    </tr>
    </thead>
       <?php 
       for($i=$first;$i<=$days;){
            echo '<tr>';
            for($j=0;$j<7;$j++){
                if($i<=$days && $i>=1){
                    echo "<td>{$i}</td>";
                }else{
                    echo "<td>&nbsp;</td>";
                }
                $i++;
            }
            echo '</tr>';

       }
       ?>
    </table>
    <div style="text-align:center;">
    <h3>
        <a href="simple3.php?y=<?php echo $prevYear ?>&m=<?php echo $prevMonth ?>">上一月</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="simple3.php?y=<?php echo $nextYear ?>&m=<?php echo $nextMonth ?>">下一月</a>
    </h3>
    </div>
</body>
</html>