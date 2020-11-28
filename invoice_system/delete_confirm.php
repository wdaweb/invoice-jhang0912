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
  <a href="my_invoice.php">取消</a>

</body>
</html