<?php
include_once "../PDO.php";
// 判斷登入時若有勾選'記住用戶名'則不刪除session並登出
if($_SESSION['session']=='true'){
  header("location:../member_system/login.php");
}else{
// 登入時若無勾選'記住用戶名'則刪除session並登出
  session_destroy();
  header("location:../member_system/login.php");

}
?>