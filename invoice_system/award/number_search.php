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
    // 判斷有輸入搜尋值就顯示搜尋值的開獎號碼
      if(isset($_POST['year']) && isset($_POST['period'])){
        $search=$pdo->query("SELECT * FROM `award_numbers` WHERE `year`='{$_POST['year']}' && `period`='  {$_POST['period']}' ORDER BY `category`")->fetchAll();
    // 增開六獎和頭獎以上分開找
        $search_six=$pdo->query("SELECT * FROM `award_numbers` WHERE `year`='{$_POST['year']}' && `period`='  {$_POST['period']}' && `category`='4'")->fetchAll();
    // 判斷六獎有幾組
        $count_six=$pdo->query("SELECT COUNT(*) FROM `award_numbers` WHERE `year`='{$_POST['year']}' &&   `period`='{$_POST['period']}' && `category`='4'")->fetch();
        $month=[
          '1'=>'1~2月',
          '2'=>'3~4月',
          '3'=>'5~6月',
          '4'=>'7~8月',
          '5'=>'9~10月',
          '6'=>'11~12月'
        ];
        if(!empty($search)){
      ?>
      <tr><td>年月份</td><td><?=$search[0][1].'年'.$month[$search[0][2]]?></td></tr>
      <tr><td rowspan="2">特別獎</td><td><?=$search[0][4]?></td></tr>
      <tr><td>同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元</td></tr>
      <tr><td rowspan="2">特獎</td><td><?=$search[1][4]?></td></tr>
      <tr><td>同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元</td></tr>
      <tr><td rowspan="5">頭獎</td><td><?=$search[1][4]?></td></tr>
      <tr><td><?=$search[2][4]?></td></tr>
      <tr><td><?=$search[3][4]?></td></tr>
      <tr><td><?=$search[4][4]?></td></tr>
      <tr><td>同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元</td></tr>
      <tr><td>二獎</td><td>同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元</td></tr>
      <tr><td>三獎</td><td>同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元</td></tr>
      <tr><td>四獎</td><td>同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元</td></tr>
      <tr><td>五獎</td><td>同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元</td></tr>
      <tr><td>六獎</td><td>同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元</td></tr>
      <tr><td rowspan='<?=$count_six[0]?>'>增開六獎</td>
      <?php
        foreach($search_six as $key=>$value){
          echo "<td>$value[4]</td></tr>";
          echo "<tr>";
        }
      echo "<td>操作</td><td><a href='edit_award.php?year={$search[0][1]}&period={$search[0][2]}'>編輯</a></td></tr>";

      }else{
        to("not_found.php");
      }
      }else{
    // 抓出最新年份
        $max_year=$pdo->query("SELECT MAX(`year`) FROM `award_numbers`")->fetch();
    // 抓出最新期數
        $max_period=$pdo->query("SELECT MAX(`period`) FROM `award_numbers`")->fetch();
    // 抓出最新年份和期數的開獎號碼
        $latest_award=$pdo->query("SELECT * FROM `award_numbers` WHERE `year`='{$max_year[0]}' && `period`='  {$max_period[0]}'")->fetchAll();
    // 單獨抓出增開六獎的開獎號碼
        $search_six2=$pdo->query("SELECT `number` FROM `award_numbers` WHERE `year`='{$max_year[0]}' &&   `period`='{$max_period[0]}' && `category`='4'")->fetchAll();
    // 抓出增開六獎有幾組
        $count_six2=$pdo->query("SELECT COUNT(`award_numbers`.`category`) FROM `award_numbers` WHERE   `year`='{$max_year[0]}' && `period`='{$max_period[0]}' && `category`='4'")->fetch();      
        $month=[
          '1'=>'1~2月',
          '2'=>'3~4月',
          '3'=>'5~6月',
          '4'=>'7~8月',
          '5'=>'9~10月',
          '6'=>'11~12月'
        ];
        echo "<tr><td>年月份</td><td>".$latest_award[0][1]."年".$month[$latest_award[0][2]]."</td></tr>";
        echo "<tr><td rowspan='2'>特別獎</td><td>".$latest_award[0][4]."</td></tr>";
        echo "<tr><td>同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元</td></tr>";
        echo "<tr><td rowspan='2'>特獎</td><td>".$latest_award[1][4]."</td></tr>";
        echo "<tr><td>同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元</td></tr>";
        echo "<tr><td rowspan='4'>頭獎</td><td>".$latest_award[2][4]."</td></tr>";
        echo "<tr><td>".$latest_award[3][4]."</td></tr>";
        echo "<tr><td>".$latest_award[4][4]."</td></tr>";
        echo "<tr><td>同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元</td></tr>";
        echo "<tr><td>二獎</td><td>同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元</td></tr>";
        echo "<tr><td>三獎</td><td>同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元</td></tr>";
        echo "<tr><td>四獎</td><td>同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元</td></tr>";
        echo "<tr><td>五獎</td><td>同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元</td></tr>";
        echo "<tr><td>六獎</td><td>同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元</td></tr>";
        echo "<tr><td rowspan='{$count_six2[0]}'>增開六獎</td>";
        foreach($search_six2 as $key=>$value){
        echo "<td>$value[0]</td></tr>";
        echo "<tr>";
        }
        echo "<td>操作</td><td><a href='edit_award.php?year={$latest_award[0][1]}&period={$latest_award[0][2]}'>編輯</a></td></tr>";
        
      }
      ?>
  </table>
  <a href="award.php">上一頁</a>
</body>
</html>