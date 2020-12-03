<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>刪除會員資料</h2>
  <h4><?php if(isset($_GET['delete'])){echo $_GET['delete'];}?></h4>
  <h4>請重新輸入帳號密碼</h4>
  <form action="delete.php" method="POST">
  帳號<input type="text" name="acc" required>
  密碼<input type="password" name="pass" required>
  <input type="submit" value="確認">
  </form>
  <a href="member_data.php">取消</a>
</body>
</html>