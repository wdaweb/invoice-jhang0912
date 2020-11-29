<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    div{
      height: 3px;
      background-color: red;
    }
  </style>
</head>
<body>
  <h2>當期消費統計</h2>
  <a href="month_count.php">月消費統計</a>
  <a href="">年消費統計</a>
  <form action="count.php" method="post">
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
  <table>
    <?php
    include_once "../PDO.php";
    
    if(!empty($_POST['year']) && !empty($_POST['period'])){
      // 抓出搜尋值得期數發票資料
      $search=$pdo->query("SELECT * FROM `invoice` WHERE `date` LIKE '{$_POST['year']}%' && `period`='{$_POST['period']}'")->fetchAll();
      // 抓出搜尋值的期數發票總金額
      $amount=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `date` LIKE '{$_POST['year']}%' && `period`='{$_POST['period']}'")->fetch();
      // echo "<pre>";
      // print_r($search);
      // echo "</pre>";
      $month=[
        '1'=>'1~2月',
        '2'=>'3~4月',
        '3'=>'5~6月',
        '4'=>'7~8月',
        '5'=>'9~10月',
        '6'=>'11~12月'
      ];
      if(!empty($search)){
      echo "<tr><td>年月份</td><td>".$_POST['year'].'年'.$month[$search[0][3]]."</td></tr>";
      echo "<tr><td>消費總金額</td><td>$".$amount[0]."</td></tr>";
      $food=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `date` LIKE '{$_POST['year']}%' && `period`='{$_POST['period']}' && `sort`='食品酒水'")->fetch();
      echo "<tr><td>食品酒水</td><td>$".$food[0]."</td><td>".round(100*($food[0]/$amount[0]),1)."%</td><td><div class='food' style='width:".((round(100*($food[0]/$amount[0]),1))*6)."px;''></div></td></tr>";
      $home=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `date` LIKE '{$_POST['year']}%' && `period`='{$_POST['period']}' && `sort`='居家物業'")->fetch();
      echo "<tr><td>居家物業</td><td>$".$home[0]."</td><td>".round(100*($home[0]/$amount[0]),1)."%</td><td><div class='home' style='width:".((round(100*($home[0]/$amount[0]),1))*6)."px;''></div></td></tr>";
      $traffic=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `date` LIKE '{$_POST['year']}%' && `period`='{$_POST['period']}' && `sort`='行車交通'")->fetch();
      echo "<tr><td>行車交通</td><td>$".$traffic[0]."</td><td>".round(100*($traffic[0]/$amount[0]),1)."%</td><td><div class='traffic' style='width:".((round(100*($traffic[0]/$amount[0]),1))*6)."px;''></div></td></tr>";
      $communication=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `date` LIKE '{$_POST['year']}%' && `period`='{$_POST['period']}' && `sort`='交流通訊'")->fetch();
      echo "<tr><td>交流通訊</td><td>$".$communication[0]."</td><td>".round(100*($communication[0]/$amount[0]),1)."%</td><td><div class='communication' style='width:".((round(100*($communication[0]/$amount[0]),1))*6)."px;''></div></td></tr>";
      $entertainment=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `date` LIKE '{$_POST['year']}%' && `period`='{$_POST['period']}' && `sort`='休閒娛樂'")->fetch();
      echo "<tr><td>休閒娛樂</td><td>$".$entertainment[0]."</td><td>".round(100*($entertainment[0]/$amount[0]),1)."%</td><td><div class='entertainment' style='width:".((round(100*($entertainment[0]/$amount[0]),1))*6)."px;''></div></td></tr>";
      $Learn=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `date` LIKE '{$_POST['year']}%' && `period`='{$_POST['period']}' && `sort`='進修學習'")->fetch();
      echo "<tr><td>進修學習</td><td>$".$Learn[0]."</td><td>".round(100*($Learn[0]/$amount[0]),1)."%</td><td><div class='Learn' style='width:".((round(100*($Learn[0]/$amount[0]),1))*6)."px;''></div></td></tr>";
      $Favor=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `date` LIKE '{$_POST['year']}%' && `period`='{$_POST['period']}' && `sort`='人情往來'")->fetch();
      echo "<tr><td>人情往來</td><td>$".$Favor[0]."</td><td>".round(100*($Favor[0]/$amount[0]),1)."%</td><td><div class='Favor' style='width:".((round(100*($Favor[0]/$amount[0]),1))*6)."px;''></div></td></tr>";
      $Medical=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `date` LIKE '{$_POST['year']}%' && `period`='{$_POST['period']}' && `sort`='醫療保健'")->fetch();
      echo "<tr><td>醫療保健</td><td>$".$Medical[0]."</td><td>".round(100*($Medical[0]/$amount[0]),1)."%</td><td><div class='Medical' style='width:".((round(100*($Medical[0]/$amount[0]),1))*6)."px;''></div></td></tr>";
      $financial=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `date` LIKE '{$_POST['year']}%' && `period`='{$_POST['period']}' && `sort`='金融保險'")->fetch();
      echo "<tr><td>金融保險</td><td>$".$financial[0]."</td><td>".round(100*($financial[0]/$amount[0]),1)."%</td><td><div class='financial' style='width:".((round(100*($financial[0]/$amount[0]),1))*6)."px;''></div></td></tr>";
      $other=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `date` LIKE '{$_POST['year']}%' && `period`='{$_POST['period']}' && `sort`='其他雜項'")->fetch();
      echo "<tr><td>其他雜項</td><td>$".$other[0]."</td><td>".round(100*($other[0]/$amount[0]),1)."%</td><td><div class='other' style='width:".((round(100*($other[0]/$amount[0]),1))*6)."px;''></div></td></tr>";
      }else{
        echo "查無資料";
      }
    }else{
    }
    ?>
  </table>
</body>
</html>