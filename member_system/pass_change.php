<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>修改密碼</h2>
  <h4><?php if(isset($_GET['update'])){echo $_GET['update'];}?></h4>
  <form action="update.php" method="post">
    舊密碼<input type="password" name="pass" required>
    新密碼<input type="password" name="new_pass" required>
    <input type="submit" value="確認修改">
  </form>
  <a href="member_data.php">上一頁</a>  
</body>
</html>