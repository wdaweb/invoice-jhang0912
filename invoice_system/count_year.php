<?php
include_once "../PDO.php";
if(!empty($_POST['year'])){setcookie("year","{$_POST['year']}",time()+18000);}
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>年度消費統計</div>
  </div>

  <div class="text-center text-danger mb-2">
    <?php if(isset($_GET['mess'])){echo $_GET['mess'];}?>
  </div>

  <div class="text-center mb-2 container">
        <form action="count_year.php" method="post" class="mb-2">
          請輸入年份 : <input type="text" name="year" pattern="[1982-2020]{4,4}" required>
          <input type="submit" class="btn btn-sm" value="搜尋">
        </form>
        
    <button type="button" class="btn btn-danger  btn-lg btn-block col-12   mb-2">
      <i class="fas fa-search-dollar h2 m-0 text-white"></i>
      <a href="count.php" class="text-white" style="text-decoration: none;">當期消費統計</a>
    </button>

    <table class="table table-borderless">
    <?php
    if(!empty($_POST['year'])){
      // 抓出搜尋值得期數發票資料
      $search=$pdo->query("SELECT * FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%'")->fetchAll();
      // 抓出搜尋值的期數發票總金額
      $amount=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%'")->fetch();
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
        echo "<div class='col-12 container-fluid d-flex  justify-content-center mb-2'>";
        echo "<div class='col-6 border-right '>";
        echo "<div class='h6 text-center'>年份</div>";
        echo "<div class='h3 text-center'>".$_POST['year']."年</div>";
        echo "</div>";
        echo "<div class='col-6'>";
        echo "<div class='h6 text-center'>消費總金額</div>";
        echo "<div class='h3 text-center'>$".$amount[0]."</div>";
        echo "</div>";
        echo "</div>";


      $food=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%' && `sort`='食品酒水'")->fetch();

      echo "<tr><td class='w-25'>食品酒水</td><td>$".$food[0]."</td><td>".round(100*($food[0]/$amount[0]),1)."%</td><td><div class='food' style='width:".((round(100*($food[0]/$amount[0]),1))*6)."px;''></div></td></tr>";

      $home=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%' && `sort`='居家物業'")->fetch();

      echo "<tr><td>居家物業</td><td>$".$home[0]."</td><td>".round(100*($home[0]/$amount[0]),1)."%</td><td><div class='home' style='width:".((round(100*($home[0]/$amount[0]),1))*6)."px;''></div></td></tr>";

      $traffic=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%' && `sort`='行車交通'")->fetch();

      echo "<tr><td>行車交通</td><td>$".$traffic[0]."</td><td>".round(100*($traffic[0]/$amount[0]),1)."%</td><td><div class='traffic' style='width:".((round(100*($traffic[0]/$amount[0]),1))*6)."px;''></div></td></tr>";
      
      $communication=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%' && `sort`='交流通訊'")->fetch();

      echo "<tr><td>交流通訊</td><td>$".$communication[0]."</td><td>".round(100*($communication[0]/$amount[0]),1)."%</td><td><div class='communication' style='width:".((round(100*($communication[0]/$amount[0]),1))*6)."px;''></div></td></tr>";

      $entertainment=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%' && `sort`='休閒娛樂'")->fetch();

      echo "<tr><td>休閒娛樂</td><td>$".$entertainment[0]."</td><td>".round(100*($entertainment[0]/$amount[0]),1)."%</td><td><div class='entertainment' style='width:".((round(100*($entertainment[0]/$amount[0]),1))*6)."px;''></div></td></tr>";

      $Learn=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%' && `sort`='進修學習'")->fetch();

      echo "<tr><td>進修學習</td><td>$".$Learn[0]."</td><td>".round(100*($Learn[0]/$amount[0]),1)."%</td><td><div class='Learn' style='width:".((round(100*($Learn[0]/$amount[0]),1))*6)."px;''></div></td></tr>";

      $Favor=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%' && `sort`='人情往來'")->fetch();

      echo "<tr><td>人情往來</td><td>$".$Favor[0]."</td><td>".round(100*($Favor[0]/$amount[0]),1)."%</td><td><div class='Favor' style='width:".((round(100*($Favor[0]/$amount[0]),1))*6)."px;''></div></td></tr>";

      $Medical=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%' && `sort`='醫療保健'")->fetch();

      echo "<tr><td>醫療保健</td><td>$".$Medical[0]."</td><td>".round(100*($Medical[0]/$amount[0]),1)."%</td><td><div class='Medical' style='width:".((round(100*($Medical[0]/$amount[0]),1))*6)."px;''></div></td></tr>";

      $financial=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%' && `sort`='金融保險'")->fetch();

      echo "<tr><td>金融保險</td><td>$".$financial[0]."</td><td>".round(100*($financial[0]/$amount[0]),1)."%</td><td><div class='financial' style='width:".((round(100*($financial[0]/$amount[0]),1))*6)."px;''></div></td></tr>";

      $other=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%' && `sort`='其他雜項'")->fetch();

      echo "<tr><td>其他雜項</td><td>$".$other[0]."</td><td>".round(100*($other[0]/$amount[0]),1)."%</td><td><div class='other' style='width:".((round(100*($other[0]/$amount[0]),1))*6)."px;''></div></td></tr>";
      }else{
        echo "<div class='col-12 container-fluid d-flex  justify-content-center mb-2'>";
        echo "<div class='col-6 border-right '>";
        echo "<div class='h6 text-center'>年月份</div>";
        echo "<div class='h3 text-center'>".$_POST['year']."年</div>";
        echo "</div>";
        echo "<div class='col-6'>";
        echo "<div class='h6 text-center'>消費總金額</div>";
        echo "<div class='h3 text-center'>$".$amount[0]."</div>";
        echo "</div>";
        echo "</div>";
        echo "<tr><td class='h4 text-danger bg-white'>查無資料</td></tr>";
      }
    }else{
    }
    ?>
  </table>



  </div>

  </section>
<?php
include_once "main_bottom.php";
?>