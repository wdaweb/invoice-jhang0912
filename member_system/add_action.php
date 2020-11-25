<?php
include_once "../PDO.php";
// 將add_member的傳值放進變數
$acc=$_POST['acc'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$name=$_POST['name'];
$gender=$_POST['gender'];

// 設置cookie與session
$member_data=$pdo->query("SELECT `member_login`.`member_id` FROM `member_login` WHERE `member_login`.`acc`='$acc' && `member_login`.`pass`='$pass'")->fetch(PDO::FETCH_ASSOC);
$id=$member_data['id'];
$_SESSION['id']=$id;
$_SESSION['acc']=$acc;
$_SESSION['pass']=$pass;
$_SESSION['email']=$email;
$_SESSION['name']=$name;
$_SESSION['gender']=$gender;

// 寫入會員資料
$insert_to_login="insert into `member_login`(`acc`,`pass`,`email`,`name`,`gender`) values('$acc','$pass','$email','$name','$gender')";
$pdo->exec($insert_to_login);

// // 跳至會員頁面並顯示資訊
if($insert_to_login){
header("location:login.php?mess=會員註冊成功!!請重新登入");
}else{
  header("location:login.php?mess=會員註冊失敗!!請重新登入");
}
?>