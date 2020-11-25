<?php
include_once "../PDO.php";
// 刪除資料庫內整筆會員資料
$pdo=$pdo->exec("DELETE FROM `member_login` WHERE `member_login`.`member_id`='{$_SESSION['id']}'");
session_destroy();
header("location:login.php");
?>