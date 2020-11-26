<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>會員中心</h2>
  <h4><?php if(isset($_GET['mess'])){echo $_GET['mess'];}?></h4>
  <a href="member_data.php">我的資料</a>
  <a href="../invoice_system/invoice_list.php">發票管理</a>
  <a href="logout.php">登出</a>
<?php
include_once "../PDO.php";
echo "會員ID:",$_SESSION['id'];
echo $_SESSION['name'];
?>
</body>
</html>