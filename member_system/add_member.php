<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add_member</title>
</head>
<body>
  <h2>會員註冊</h2>
  <form action="add_action.php" method="post">
    <label for="acc">帳號</label><input type="text" name="acc" id="acc">
    <label for="pass">密碼</label><input type="text" name="pass" id="pass">
    <label for="email">電子信箱</label><input type="text" name="email" id="email">
    <label for="name">用戶名稱</label><input type="text" name="name" id="name">
    性別<input type="radio" name="gender" value="先生" checked>先生
    <input type="radio" name="gender" value="女士">女士
    <input type="submit" value="註冊">
    <input type="reset" value="重置">
  </form>
</body>
</html>