<?php
include_once "../../PDO.php";
$search=$pdo->query("SELECT * FROM `award_numbers` WHERE `year`='{$_GET['year']}' && `period`='  {$_GET['period']}' ORDER BY `category`")->fetchAll();
// echo "<pre>";
// print_r($search);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>開獎號碼編輯</h2>
<form action="update_award.php" method="post">
    年份:<input type="text" name="year" value="<?=$search[0][1];?>">
    <div>
    期別:
      <select name="period">
      <option value="1" <?php if($search[0][2]=='1'){echo "selected";}?>>1~2月</option>
      <option value="2" <?php if($search[0][2]=='2'){echo "selected";}?>>3~4月</option>
      <option value="3" <?php if($search[0][2]=='3'){echo "selected";}?>>5~6月</option>
      <option value="4" <?php if($search[0][2]=='4'){echo "selected";}?>>7~8月</option>
      <option value="5" <?php if($search[0][2]=='5'){echo "selected";}?>>9~10月</option>
      <option value="6" <?php if($search[0][2]=='6'){echo "selected";}?>>11~12月</option>
      </select>
    </div>
    <hr>
    <!-- 特別獎 -->
    獎別:
      <select name="category1">
      <option value="1">特別獎</option>
      </select>
    <div>號碼:<input type="text" name="number1" value="<?=$search[0][4]?>"></div>
    <hr>
    <!-- 特獎 -->
    獎別:
      <select name="category2">
      <option value="2">特獎</option>
      </select>
      <div>號碼:<input type="text" name="number2" value="<?=$search[1][4]?>"></div>
      <hr>
      <!-- 頭獎 -->
      獎別:
        <select name="category3">
        <option value="3">頭獎</option>
        </select>
    <div>號碼:
      <input type="text" name="number3" value="<?=$search[2][4]?>">
      <input type="text" name="number4" value="<?=$search[3][4]?>">
      <input type="text" name="number5" value="<?=$search[4][4]?>">
    </div>
    <hr>
    <!-- 增開六獎 -->
    獎別:
      <select name="category4">
      <option value="4">增開六獎</option>
      </select>
    <div>號碼:
      <input type="text" name="number6" value="<?php if(!empty($search[5][4])){echo $search[5][4]; }?>">
      <input type="text" name="number7" value="<?php if(!empty($search[6][4])){echo $search[6][4]; }?>">
      <input type="text" name="number8" value="<?php if(!empty($search[7][4])){echo $search[7][4]; }?>">
    </div>
    <input type="submit" value="儲存">
    <input type="reset" value="重置">
  </form>
  <a href="delete_award.php?year=<?=$search[0][1]?>&period=<?=$search[0][2]?>">刪除</a>
  <a href="number_search.php">上一頁</a>

</body>
</html>