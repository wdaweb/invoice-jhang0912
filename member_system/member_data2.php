<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>member_data</title>
</head>
<body>
  <h2>會員資料編輯</h2>
  <h4><?php if(isset($_GET['update'])){echo $_GET['update'];}?></h4>
  <form action="update.php" method="post">
    <label for="acc">帳號</label><input readonly type="text" name="acc" id="acc" value="<?php include_once "../PDO.php";echo $_SESSION['acc'];?>">
    密碼<a href="pass_change.php">修改</a>
    <label for="email">電子信箱</label><input type="email" name="email" id="email" value="<?php echo $_SESSION['email'];?>" required>
    <label for="name">用戶名稱</label><input type="text" name="name" id="name" value="<?php echo $_SESSION['name'];?>" required>
    性別
    <input readonly type="text" name="gender" value="<?php if($_SESSION['gender']=='男士'){echo "男士";}else{echo "女士";}?>">
    <input type="submit" value="確認修改">
    <a href="delete_confirm.php">刪除會員資料</a>
  </form>
<a href="member_page.php">上一頁</a>
</body>
</html>