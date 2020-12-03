<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add_member</title>
</head>
<body>
  <h2>發票儲存</h2>
  <form action="add_action.php" method="post">
    <label for="date">日期:</label><input type="date" name="date" id="date" required>
    <div>
      期別:
      <select name="period" required>
      <option value="1">1~2月</option>
      <option value="2">3~4月</option>
      <option value="3">5~6月</option>
      <option value="4">7~8月</option>
      <option value="5">9~10月</option>
      <option value="6">11~12月</option>
      </select>
    </div>
    <div>
      發票號碼:
      <input type="text" style="width:20px;" name="heading" pattern="[A-Z]{2,2}" required> -
      <input type="text" style="width:80px;" name="number" pattern="[0-9]{8,8}" required>
    </div>
    <div><label for="amount">金額:</label><input type="number" name="amount" id="amount" min="1" max="99999999" required></div>
    <div>
      分類:
      <select name="sort">
      <option value="食品酒水">食品酒水</option>
      <option value="居家物業">居家物業</option>
      <option value="行車交通">行車交通</option>
      <option value="交流通訊">交流通訊</option>
      <option value="休閒娛樂">休閒娛樂</option>
      <option value="進修學習">進修學習</option>
      <option value="人情往來">人情往來</option>
      <option value="醫療保健">醫療保健</option>
      <option value="金融保險">金融保險</option>
      <option value="其他雜項">其他雜項</option>
      </select>
    </div>
    <div>備註:<textarea name="note" cols="30" rows="3"></textarea></div>
    <input type="submit" value="儲存">
    <input type="reset" value="清空">
  </form>
  <a href="invoice_board.php">上一頁</a>
  <a href="my_invoice.php">我的發票</a>
</body>
</html>