<?php
include_once "../PDO.php";
$pdo=$pdo->query("SELECT * FROM `invoice` WHERE `id`='{$_GET['id']}'")->fetchAll();
// echo "<pre>";
// print_r($pdo);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>發票編輯</title>
</head>
<body>
  <H2>發票編輯</H2>
  <form action=".php" method="post">
    <label for="date">日期:</label><input type="date" name="date" id="date" value="<?php echo $pdo[0][2]?>">
    <div>
      期數:
      <select name="period">
      <option value="1" <?php if($pdo[0][3]=='1'){echo "selected";}?>>1~2月</option>
      <option value="2" <?php if($pdo[0][3]=='2'){echo "selected";}?>>3~4月</option>
      <option value="3" <?php if($pdo[0][3]=='3'){echo "selected";}?>>5~6月</option>
      <option value="4" <?php if($pdo[0][3]=='4'){echo "selected";}?>>7~8月</option>
      <option value="5" <?php if($pdo[0][3]=='5'){echo "selected";}?>>9~10月</option>
      <option value="6" <?php if($pdo[0][3]=='6'){echo "selected";}?>>11~12月</option>
      </select>
    </div>
    <div>
      發票號碼:
      <input type="text" style="width:20px;" name="heading" value="<?php echo $pdo[0][4]?>"> -
      <input type="text" style="width:80px;" name="number" value="<?php echo $pdo[0][5]?>">
    </div>
    <div><label for="amount">金額:</label><input type="text" name="amount" id="amount" value="<?php echo $pdo[0][6]?>"></div>
    <div>
      分類:
      <select name="sort">
      <option value="食品酒水" <?php if($pdo[0][3]=='食品酒水'){echo "selected";}?>>食品酒水</option>
      <option value="居家物業" <?php if($pdo[0][3]=='居家物業'){echo "selected";}?>>居家物業</option>
      <option value="行車交通" <?php if($pdo[0][3]=='行車交通'){echo "selected";}?>>行車交通</option>
      <option value="交流通訊" <?php if($pdo[0][3]=='交流通訊'){echo "selected";}?>>交流通訊</option>
      <option value="休閒娛樂" <?php if($pdo[0][3]=='休閒娛樂'){echo "selected";}?>>休閒娛樂</option>
      <option value="進修學習" <?php if($pdo[0][3]=='進修學習'){echo "selected";}?>>進修學習</option>
      <option value="人情往來" <?php if($pdo[0][3]=='人情往來'){echo "selected";}?>>人情往來</option>
      <option value="醫療保健" <?php if($pdo[0][3]=='醫療保健'){echo "selected";}?>>醫療保健</option>
      <option value="金融保險" <?php if($pdo[0][3]=='金融保險'){echo "selected";}?>>金融保險</option>
      <option value="其他雜項" <?php if($pdo[0][3]=='其他雜項'){echo "selected";}?>>其他雜項</option>
      </select>
    </div>
    <div>備註:<textarea name="note" cols="30" rows="3" ><?php echo $pdo[0][8]?></textarea></div>
    <input type="submit" value="儲存">
    <a href="my_invoice.php">取消</a>
  </form>
</body>
</html>