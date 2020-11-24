<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>
<body>
  <h4><?php if(isset($_GET['mess'])){echo $_GET['mess'];}?></h4>
  <h2>發票對獎系統</h2>
  <h3>會員登入</h3>
  <form action="login_checked.php" method="post">
    <label for="acc">帳號:</label><input type="text" name="acc" id="acc" value="<?php include_once "../PDO.php";echo$_SESSION['acc'];?>">
    <label for="pass">密碼:</label><input type="text" name="pass" id="pass">
    <a href="">忘記密碼?</a>
    <a href="add_member.php">立即註冊</a>
    <input type="submit" value="登入">
  </form>
</body>
</html>