<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>member_data</title>
</head>
<body>
<?php
include_once "../PDO.php";
echo $_SESSION['id'];
echo "<br>";
echo $_SESSION['acc'];
echo "<br>";
echo $_SESSION['pass'];
echo "<br>";
echo $_SESSION['email'];
echo "<br>";
echo $_SESSION['name'];
echo "<br>";
echo $_SESSION['gender'];
echo "<br>";
?>
<a href="member_page.php">上一頁</a>
</body>
</html>