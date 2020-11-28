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
    年份:<input type="text" name="year">
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
    <div>號碼:<input type="text" name="number1"></div>
    <hr>
    <!-- 特獎 -->
    獎別:
      <select name="category2">
      <option value="2">特獎</option>
      </select>
      <div>號碼:<input type="text" name="number2"></div>
      <hr>
      <!-- 頭獎 -->
      獎別:
        <select name="category3">
        <option value="3">頭獎</option>
        </select>
    <div>號碼:
      <input type="text" name="number3">
      <input type="text" name="number4">
      <input type="text" name="number5">
    </div>
    <hr>
    <!-- 增開六獎 -->
    獎別:
      <select name="category4">
      <option value="4">增開六獎</option>
      </select>
    <div>號碼:
      <input type="text" name="number6">
      <input type="text" name="number7">
      <input type="text" name="number8">
    </div>
    <input type="submit" value="儲存">
    <input type="reset" value="重置">
  </form>
  <a href="award.php">上一頁</a>
</body>
</html>