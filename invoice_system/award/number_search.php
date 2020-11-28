<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table td{
      border: 1px solid black;
      text-align: center;
    }
  </style>
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
  <table cellpadding="5" cellspacing="0">
    <?php
    include_once "../../PDO.php";
    if(isset($_POST['year']) && isset($_POST['period'])){
      $search=$pdo->query("SELECT * FROM `award_numbers` WHERE `year`='{$_POST['year']}' && `period`='{$_POST['period']}' ORDER BY `category`")->fetchAll();
      // echo "<pre>";
      // print_r($search);
      // echo "</pre>";
      $search_six=$pdo->query("SELECT * FROM `award_numbers` WHERE `year`='{$_POST['year']}' && `period`='{$_POST['period']}' && `category`='4'")->fetchAll();
      $count_six=$pdo->query("SELECT COUNT(*) FROM `award_numbers` WHERE `year`='{$_POST['year']}' && `period`='{$_POST['period']}' && `category`='4'")->fetch();
    ?>
    <tr><td>年月份</td><td colspan="<?=$count_six[0]?>"><?=$search[0][1]?></td></tr>
    <tr><td rowspan="2">特別獎</td><td colspan="<?=$count_six[0]?>"><?=$search[0][4]?></td></tr>
    <td colspan="<?=$count_six[0]?>">同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元</td>
    <tr><td rowspan="2">特獎</td><td colspan="<?=$count_six[0]?>"><?=$search[1][4]?></td></tr>
    <td colspan="<?=$count_six[0]?>">同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元</td>
    <tr><td rowspan="5">頭獎</td><td colspan="<?=$count_six[0]?>"><?=$search[1][4]?></td></tr>
    <tr><td colspan="<?=$count_six[0]?>"><?=$search[2][4]?></td></tr>
    <tr><td colspan="<?=$count_six[0]?>"><?=$search[3][4]?></td></tr>
    <tr><td colspan="<?=$count_six[0]?>"><?=$search[4][4]?></td></tr>
    <tr><td colspan="<?=$count_six[0]?>">同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元</td></tr>
    <tr><td>二獎</td><td colspan="<?=$count_six[0]?>">同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元</td></tr>
    <tr><td>三獎</td><td colspan="<?=$count_six[0]?>">同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元</td></tr>
    <tr><td>四獎</td><td colspan="<?=$count_six[0]?>">同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元</td></tr>
    <tr><td>五獎</td><td colspan="<?=$count_six[0]?>">同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元</td></tr>
    <tr><td>六獎</td><td colspan="<?=$count_six[0]?>">同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元</td></tr>
    <tr><td rowspan="2">增開六獎</td>
    <?php
      foreach($search_six as $key=>$value){
        // echo "<pre>";
        // print_r($value);
        // echo "</pre>";
        echo "<td>$value[4]</td>";
      }
    }else{}
    ?>
    </tr>
  </table>
  <a href="award.php">上一頁</a>
</body>
</html>