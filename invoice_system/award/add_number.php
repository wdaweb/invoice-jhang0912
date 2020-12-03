<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>開獎號碼登入</h2>
  <form action="add_action.php" method="post">
    年份:<input type="text" style="width:50px;" name="year" pattern="[0-9]{4,4}" required>
    <div>
    期別:
      <select name="period">
      <option value="1">1~2月</option>
      <option value="2">3~4月</option>
      <option value="3">5~6月</option>
      <option value="4">7~8月</option>
      <option value="5">9~10月</option>
      <option value="6">11~12月</option>
      </select>
    </div>
    <hr>
    <!-- 特別獎 -->
    獎別:
      <select name="category1">
      <option value="1">特別獎</option>
      </select>
    <div>號碼:<input type="text" style="width:80px;" pattern="[0-9]{8,8}" name="number1" required></div>
    <hr>
    <!-- 特獎 -->
    獎別:
      <select name="category2">
      <option value="2">特獎</option>
      </select>
      <div>號碼:<input type="text" style="width:80px;" pattern="[0-9]{8,8}" name="number2" required></div>
      <hr>
      <!-- 頭獎 -->
      獎別:
        <select name="category3">
        <option value="3">頭獎</option>
        </select>
    <div>號碼:
      <input type="text" style="width:80px;" pattern="[0-9]{8,8}" name="number3" required>
      <input type="text" style="width:80px;" pattern="[0-9]{8,8}" name="number4" required>
      <input type="text" style="width:80px;" pattern="[0-9]{8,8}" name="number5" required>
    </div>
    <hr>
    <!-- 增開六獎 -->
    獎別:
      <select name="category4">
      <option value="4">增開六獎</option>
      </select>
    <div>號碼:
      <input type="text" style="width:80px;" pattern="[0-9]{3,3}" name="number6" required>
      <input type="text" style="width:80px;" pattern="[0-9]{3,3}" name="number7">
      <input type="text" style="width:80px;" pattern="[0-9]{3,3}" name="number8">
    </div>
    <input type="submit" value="儲存">
    <input type="reset" value="清空">
  </form>
  <a href="award.php">上一頁</a>
</body>
</html>