<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="number_search.php" method="post">
    年份:<input type="text" name="year">
    期數:
    <select name="period">
      <option value="1">1~2月</option>
      <option value="2">3~4月</option>
      <option value="3">5~6月</option>
      <option value="4">7~8月</option>
      <option value="5">9~10月</option>
      <option value="6">11~12月</option>
    </select>
    <input type="submit" value="搜尋">
  </form>
  <h3>非常抱歉~您搜尋的開獎號碼不是尚未開獎就是未登入</h3>
  <a href="award.php">上一頁</a>
</body>
</html>