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
  <h3>當月發票張數:</h3>
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
    include_once "../PDO.php";
    $search_invoice=$pdo->query("SELECT * FROM `invoice` ORDER BY `invoice`.`date` DESC"
    )->fetchAll();
    // echo"<pre>";
    // print_r($search_invoice);
    // echo"</pre>";

    foreach($search_invoice as $key=>$value){
      // echo"<pre>";
      // print_r($value);
      // echo"</pre>";
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
  <a href="invoice_board.php">上一頁</a>
</body>
</html>