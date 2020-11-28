<?php
include_once "../PDO.php";
// 將add_invoice的傳值放進變數
$date=$_POST['date'];
$period=$_POST['period'];
$heading=$_POST['heading'];
$number=$_POST['number'];
$amount=$_POST['amount'];
$sort=$_POST['sort'];
$note=$_POST['note'];

// 寫入發票資料
$insert_to_invoice="INSERT INTO `invoice`(`member_id`, `date`, `period`, `heading`, `number`, `amount`, `sort`, `note`) VALUES ('{$_SESSION['id']}','$date','$period','$heading','$number','$amount','$sort','$note')";
$pdo->exec($insert_to_invoice);
to("add_invoice.php?mess=儲存成功");
?>