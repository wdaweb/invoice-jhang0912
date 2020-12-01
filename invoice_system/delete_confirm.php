<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table td{
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <h2>是否刪除此筆發票資訊!?</h2>
  <table cellpadding="5" cellspacing="0">
    <?php
    include_once "../PDO.php";
    $search_invoice=$pdo->query("SELECT * FROM `invoice` WHERE `invoice`.`id`='{$_GET['id']}'")->fetch();
    // echo "<pre>";
    // print_r($search_invoice);
    // echo "</pre>";
    ?>
    <tr><td>日期</td><td><?=$search_invoice[2]?></td></tr>
    <tr><td>發票號碼</td><td><?=$search_invoice[4].'-'.$search_invoice[5]?></td></tr>
    <tr><td>金額</td><td><?=$search_invoice[6]?></td></tr>
    <tr><td>類別</td><td><?=$search_invoice[7]?></td></tr>
    <tr><td>備註</td><td><?=$search_invoice[8]?></td></tr>
  </table>
  <a href="delete_action.php?id=<?=$search_invoice[0]?>">刪除</a>
  <?php
  switch($search_invoice[3]){
    case '1':
      echo "<a href='period.php?period=1&period=1&month=1~2月'>取消</a>";
    break;
    case '2':
      echo "<a href='period.php?period=2&period=2&month=3~4月'>取消</a>";
    break;
    case '3':
      echo "<a href='period.php?period=3&period=3&month=5~6月'>取消</a>";
    break;
    case '4':
      echo "<a href='period.php?period=4&period=4&month=7~8月'>取消</a>";
    break;
    case '5':
      echo "<a href='period.php?period=5&period=5&month=9~10月'>取消</a>";
    break;
    case '6':
      echo "<a href='period.php?period=6&period=6&month=11~12月'>取消</a>";
    break;
  }
  ?>
  <a href="my_invoice.php">我的發票</a>
</body>
</html