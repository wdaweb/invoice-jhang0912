<?php
include_once "../PDO.php";
$pdo=$pdo->query("SELECT * FROM `invoice` WHERE `id`='{$_GET['id']}'")->fetchAll();
setcookie("invoice_id","{$pdo[0][0]}","time()+3600");
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
  <form action="update_invoice.php" method="post">
    
    <label for="date">日期:</label><input type="date" name="date" id="date" value="<?php echo $pdo[0][2]?>" required>
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
      <input type="text" style="width:20px;" name="heading" value="<?php echo $pdo[0][4]?>" pattern="[A-Z]{2,2}" require> -
      <input type="number" style="width:80px;" name="number" value="<?php echo $pdo[0][5]?>" pattern="[0-9]{8,8}" required>
    </div>
    <div><label for="amount">金額:</label><input type="number" name="amount" id="amount" value="<?php echo $pdo[0][6]?>" min="1" max="99999999" required></div>
    <div>
      分類:
      <select name="sort">
      <option value="食品酒水" <?php if($pdo[0][7]=='食品酒水'){echo "selected";}?>>食品酒水</option>
      <option value="居家物業" <?php if($pdo[0][7]=='居家物業'){echo "selected";}?>>居家物業</option>
      <option value="行車交通" <?php if($pdo[0][7]=='行車交通'){echo "selected";}?>>行車交通</option>
      <option value="交流通訊" <?php if($pdo[0][7]=='交流通訊'){echo "selected";}?>>交流通訊</option>
      <option value="休閒娛樂" <?php if($pdo[0][7]=='休閒娛樂'){echo "selected";}?>>休閒娛樂</option>
      <option value="進修學習" <?php if($pdo[0][7]=='進修學習'){echo "selected";}?>>進修學習</option>
      <option value="人情往來" <?php if($pdo[0][7]=='人情往來'){echo "selected";}?>>人情往來</option>
      <option value="醫療保健" <?php if($pdo[0][7]=='醫療保健'){echo "selected";}?>>醫療保健</option>
      <option value="金融保險" <?php if($pdo[0][7]=='金融保險'){echo "selected";}?>>金融保險</option>
      <option value="其他雜項" <?php if($pdo[0][7]=='其他雜項'){echo "selected";}?>>其他雜項</option>
      </select>
    </div>
    <div>備註:<textarea name="note" cols="20" rows="3" ><?php echo $pdo[0][8]?></textarea></div>
    <input type="submit" value="儲存">
    <?php
    switch($pdo[0][3]){
      case '1':
        echo "<a href='period.php?period=1&period=1&month=1~2月'>取消</a>";
      break;
      case '2':
        echo "<a href='period.php?period=2&period=2&month=3~4月'>取消</a>";
      break;
      case '3':
        echo "<a href='period.php?period=3&period=3&month=5~6月'>取消</a>";
      break;
      case '4':
        echo "<a href='period.php?period=4&period=4&month=7~8月'>取消</a>";
      break;
      case '5':
        echo "<a href='period.php?period=5&period=5&month=9~10月'>取消</a>";
      break;
      case '6':
        echo "<a href='period.php?period=6&period=6&month=11~12月'>取消</a>";
      break;
    }
    ?>
      <a href="my_invoice.php">我的發票</a>
  </form>
</body>
</html>