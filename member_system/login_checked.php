<?php
include_once "../PDO.php";
// 將login的傳值放進變數
$acc=$_POST['acc'];
$pass=$_POST['pass'];
$session=$_POST['session'];

// 執行SQL搜尋語法並判斷帳號是否存在資料庫
$check_acc=$pdo->query("SELECT * FROM `member_login` WHERE `member_login`.`acc`='$acc'")->fetchAll(PDO::FETCH_ASSOC);
if(!empty($check_acc)){

// 執行SQL搜尋語法並判斷密碼是否正確
  $check_pass=$pdo->query("SELECT * FROM `member_login` WHERE `member_login`.`acc`='$acc' && `member_login`.`pass`='$pass'")->fetchAll(PDO::FETCH_ASSOC);

// 密碼正確就跳至會員頁面
  if(!empty($check_pass)){
    $id=$check_pass[0]['member_id'];
    $name=$check_pass[0]['name'];
    $email=$check_pass[0]['email'];
    $gender=$check_pass[0]['gender'];

// 設置session
    $_SESSION['id']=$id;
    $_SESSION['acc']=$acc;
    $_SESSION['pass']=$pass;
    $_SESSION['email']=$email;
    $_SESSION['name']=$name;
    $_SESSION['gender']=$gender;
    $_SESSION['session']=$session;
    to("member_page.php?mess=登入成功");
  }else{

// 密碼錯誤就跳回登入頁面
header("location:login.php?login_error=帳號密碼輸入錯誤!!");
  }
}else{
  
// 帳號不存在就跳回登入頁面
header("location:login.php?login_error=帳號密碼輸入錯誤!!");
}

?>