<?php
include_once "../PDO.php";
echo $date=$_POST['date'];
echo $period=$_POST['period'];
echo $heading=$_POST['heading'];
echo $number=$_POST['number'];
echo $amount=$_POST['amount'];
echo $sort=$_POST['sort'];
echo $note=$_POST['note'];

$update_invoice="UPDATE `invoice` SET `date`='$date',`period`='$period',`heading`='$heading',`number`='$number',`amount`='$amount',`sort`='$sort',`note`='$note' WHERE `invoice`.`id`='{$_COOKIE['invoice_id']}'";
$pdo->exec($update_invoice);
to("my_invoice.php?mess=修改成功");
?>