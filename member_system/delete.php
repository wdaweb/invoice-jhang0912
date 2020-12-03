<?php
include_once "../PDO.php";
// 判斷輸入帳號與密碼都正確就刪除資料庫內整筆會員資料
if($_POST['acc']==$_SESSION['acc'] && $_POST['pass']==$_SESSION['pass']){
$pdo=$pdo->exec("DELETE FROM `member_login` WHERE `member_login`.`member_id`='{$_SESSION['id']}'");
session_destroy();
header("location:login.php");
}else{
  header("location:delete_confirm.php?delete=帳號密碼輸入錯誤!");
}
?>