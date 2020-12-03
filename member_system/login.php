<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
  <title>login</title>
</head>
<body>
  <script>
  </script>
  <h4><?php if(isset($_GET['mess'])){echo $_GET['mess'];}?></h4>
  <h2>發票對獎系統</h2>
  <h3>會員登入</h3>
  <div><?php if(isset($_GET['login_error'])){echo $_GET['login_error'];}?></div>
  <form action="login_checked.php" method="post">
    <div>
      <label for="acc">帳號:</label><input type="text" name="acc" id="acc" value="<?php include_once "../PDO.php";if(isset($_SESSION['acc'])){echo$_SESSION['acc'];}?>" required>
    </div>
    <div>
      <label for="pass">密碼:</label><input type="text" name="pass" id="pass" required>
    </div>
    <input type="checkbox" name="session" value="true" checked>記住用戶名稱
    <div>
      <a href="add_member.php">立即註冊</a>
    </div>
    <input type="submit" value="登入">
  </form>
</body>
</html>