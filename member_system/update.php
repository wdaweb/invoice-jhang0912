<?php
  include_once "../PDO.php";

// 一般資料修改
if(isset($_POST['acc'])){
  $update=$pdo->exec("UPDATE `member_login` SET `member_login`.`email`='{$_POST['email']}',`member_login`.`name`='{$_POST['name']}' WHERE `member_login`.`member_id`='{$_SESSION['id']}'");
  
// 設置新的session
    $_SESSION['email']=$_POST['email'];
    $_SESSION['name']=$_POST['name'];
    header("location:member_data.php");
  }   
  
// 密碼修改
if(isset($_POST['pass'])){
    if($_POST['pass']==$_SESSION['pass']){
      $pass_change=$pdo->exec("UPDATE `member_login` SET `member_login`.`pass`='{$_POST['new_pass']}' WHERE `member_login`.`member_id`='{$_SESSION['id']}'");
      $_SESSION['pass']=$_POST['new_pass'];
      header("location:member_data.php");
    }else{
      header("location:pass_change.php");
    }
  }


  ?>
  
