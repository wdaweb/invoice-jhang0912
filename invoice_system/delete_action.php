<?php
include_once "../PDO.php";
$delete="DELETE FROM `invoice` WHERE `invoice`.`id`='{$_GET['id']}'";
$pdo->exec($delete);
to("my_invoice.php?mess=發票刪除成功");
?>