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
    <label for="date">日期:</label><input type="date" name="date" id="date">
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
    <div><label for="amount">金額:</label><input type="text" name="amount" id="amount"></div>
    <div>備註:<textarea name="note" cols="30" rows="3"></textarea></div>
    <div>
      發票號碼:
      <input type="text" style="width:20px;" name="heading"> -
      <input type="text" style="width:80px;" name="number">
    </div>
    <input type="submit" value="儲存">
    <input type="reset" value="重置">
  </form>
  <a href="invoice_list.php">上一頁</a>
</body>
</html>