<?php
include_once "../PDO.php";
$period_invoice=$pdo->query("SELECT * FROM `invoice` WHERE `date` LIKE '{$_COOKIE['year']}%' && `period` = '{$_GET['period']}' ORDER BY `date` DESC")->fetchALL();
$count_invoice=$pdo->query("SELECT COUNT(`invoice`.`id`) FROM `invoice` WHERE `date` LIKE '{$_COOKIE['year']}%' && `period` = '{$_GET['period']}'")->fetch();
$amount_invoice=$pdo->query("SELECT SUM(`invoice`.`amount`) FROM `invoice` WHERE `date` LIKE '{$_COOKIE['year']}%' && `period` = '{$_GET['period']}'")->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>我的發票</title>
  <style>
    table td{
      border: 1px solid black;
      text-align: center;
    }
  </style>
</head>
<body>
  <h3><?=$_COOKIE['year'].'年'?></h3>
  <h3>01~02月</h3>
  <h3>當期發票張數:<?=$count_invoice[0]?>張</h3>
  <h3>消費總金額:$<?=$amount_invoice[0]?></h3>
  <h3>中獎金額:</h3>
  <div>
    <a href="period.php?year=<?=$_COOKIE['year']?>&period=1">1~2月</a>
    <a href="period.php?year=<?=$_COOKIE['year']?>&period=2">3~4月</a>
    <a href="period.php?year=<?=$_COOKIE['year']?>&period=3">5~6月</a>
    <a href="period.php?year=<?=$_COOKIE['year']?>&period=4">7~8月</a>
    <a href="period.php?year=<?=$_COOKIE['year']?>&period=5">9~10月</a>
    <a href="period.php?year=<?=$_COOKIE['year']?>&period=6">11~12月</a>
  </div>
  <table cellpadding="5" cellspacing="0">
    <tr>
      <td>日期</td>
      <td>發票號碼</td>
      <td>金額</td>
      <td>類別</td>
      <td>備註</td>
      <td colspan="2">操作</td>
    </tr>
    <?php
    foreach($period_invoice as $key=>$value){
      echo "<tr>";
      echo"<td>$value[2]</td>";
      echo"<td>$value[4]-$value[5]</td>";
      echo"<td>$value[6]</td>";
      echo"<td>$value[7]</td>";
      echo"<td>$value[8]</td>";
      echo"<td><a href='../edit_invoice.php?id=$value[0]'>編輯</a></td>";
      echo"<td><a href='../delete_confirm.php?id=$value[0]'>刪除</a></td>";
      echo "</tr>";
    }
    ?>
  </table>
  <a href="my_invoice.php?">上一頁</a>
</body>
</html>