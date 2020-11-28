<?php
include_once "../PDO.php";
$invoice=$pdo->query("SELECT * FROM `invoice` WHERE `date` LIKE '2020%' ORDER BY `date` DESC")->fetchALL();
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
  <h2>我的發票</h2>
  <h3><a href="period/1-2.php">1~2月</a></h3>
  <h3><a href="period/3-4.php">3~4月</a></h3>
  <h3><a href="period/5-6.php">5~6月</a></h3>
  <h3><a href="period/7-8.php">7~8月</a></h3>
  <h3><a href="period/9-10.php">9~10月</a></h3>
  <h3><a href="period/11-12.php">11~12月</a></h3>
  <a href="invoice_board.php">上一頁</a>
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
    foreach($invoice as $key=>$value){
      echo "<tr>";
      echo"<td>$value[2]</td>";
      echo"<td>$value[4]-$value[5]</td>";
      echo"<td>$value[6]</td>";
      echo"<td>$value[7]</td>";
      echo"<td>$value[8]</td>";
      echo"<td><a href='edit_invoice.php?id=$value[0]'>編輯</a></td>";
      echo"<td><a href='delete_confirm.php?id=$value[0]'>刪除</a></td>";
      echo "</tr>";
    }
    ?>
  </table>

</body>
</html>