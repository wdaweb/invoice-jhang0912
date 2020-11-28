<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>刪除會員資料</h2>
  <h4>請重新輸入帳號密碼</h4>
  <form action="delete.php" method="POST">
  帳號<input type="text" name="acc">
  密碼<input type="text" name="pass">
  </form>
  <a href="delete.php">確認</a>
  <a href="member_data.php">取消</a>
</body>
</html>