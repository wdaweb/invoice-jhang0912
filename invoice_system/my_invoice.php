<?php
include_once "../PDO.php";
if(!empty($_POST['year'])){setcookie("year","{$_POST['year']}",time()+18000);}
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>我的發票</div>
  </div>

  <div class="text-center text-danger mb-2">
    <?php if(isset($_GET['mess'])){echo $_GET['mess'];}?>
  </div>

  <div class="text-center mb-2">
        <form action="my_invoice.php" method="post">
          請輸入年份 : <input type="text" name="year" pattern="[1982-2020]{4,4}" required>
          <input type="submit" class="btn btn-sm" value="搜尋">
        </form>
  </div>
  <div class="d-flex justify-content-center col-12 mb-2">
    <?php
    if(isset($_POST['year'])){
      $year=$_POST['year'];
    }elseif(isset($_COOKIE['year'])){
      $year=$_COOKIE['year'];
    }else{}
      ?>
    <a class="btn mr-2" href="period.php?year=<?=$year?>&period=1&month=1~2月">1~2月</a>
    <a class="btn mr-2" href="period.php?year=<?=$year?>&period=2&month=3~4月">3~4月</a>
    <a class="btn mr-2" href="period.php?year=<?=$year?>&period=3&month=5~6月">5~6月</a>
    <a class="btn mr-2" href="period.php?year=<?=$year?>&period=4&month=7~8月">7~8月</a>
    <a class="btn mr-2" href="period.php?year=<?=$year?>&period=5&month=9~10月">9~10月</a>
    <a class="btn mr-2" href="period.php?year=<?=$year?>&period=6&month=11~12月">11~12月</a>
  </div>
  <?php
  if(!empty($_POST['year'])){
    $invoice=$pdo->query("SELECT * FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%' ORDER BY `date` DESC")->fetchALL();
    $count_invoice=$pdo->query("SELECT COUNT(`invoice`.`id`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%'")->fetch();
    $amount_invoice=$pdo->query("SELECT SUM(`invoice`.`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%'")->fetch();
    $year=$pdo->query("SELECT YEAR(`date`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_POST['year']}%'")->fetch();
  ?>
  <div class="col-12 container-fluid d-flex justify-content-center mb-2">
    <div class="col-4 border-right ">
      <div class="h6 text-center">年份</div>
      <div class="h3 text-center"><?=$_POST['year'].'年'?></div>
    </div>
    <div class="col-4 border-right">
      <div class="h6 text-center">發票張數</div>
      <div class="h3 text-center"><?=$count_invoice[0]?>張</div>
    </div>
    <div class="col-4">
      <div class="h6 text-center">消費總金額</div>
      <div class="h3 text-center">$<?=$amount_invoice[0]?></div>
    </div>
  </div>

  <div class="col-12 container pl-4 pr-4">
  <table class="table" cellpadding="5" cellspacing="0">
    <tr>
      <td class="h4 radiusl">日期</td>
      <td class="h4">發票號碼</td>
      <td class="h4">金額</td>
      <td class="h4">類別</td>
      <td class="h4">備註</td>
      <td class="h4 radiusr" colspan="2">操作</td>
    </tr>
    <?php
    foreach($invoice as $key=>$value){
      echo "<tr>";
      echo"<td>$value[2]</td>";
      echo"<td>$value[4]-$value[5]</td>";
      echo"<td>$$value[6]</td>";
      echo"<td>$value[7]</td>";
      echo"<td>$value[8]</td>";
      echo"<td><a href='edit_invoice.php?id=$value[0]' class='btn btn-sm btn-primary'>編輯</a></td>";
      echo"<td><a href='delete_confirm.php?id=$value[0]' class='btn btn-sm btn-danger'>刪除</a></td>";
      echo "</tr>";
    }
      echo"</table>";
      echo"</div>";
  }elseif(!empty($_COOKIE['year'])){
    $invoice=$pdo->query("SELECT * FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_COOKIE['year']}%' ORDER BY `date` DESC")->fetchALL();
    $count_invoice=$pdo->query("SELECT COUNT(`invoice`.`id`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_COOKIE['year']}%'")->fetch();
    $amount_invoice=$pdo->query("SELECT SUM(`invoice`.`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_COOKIE['year']}%'")->fetch();
    $year=$pdo->query("SELECT YEAR(`date`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_COOKIE['year']}%'")->fetch();
    ?>
    <div class="col-12 container-fluid d-flex justify-content-center mb-2">
    <div class="col-4 border-right ">
      <div class="h6 text-center">年份</div>
      <div class="h3 text-center"><?=$_COOKIE['year'].'年'?></div>
    </div>
    <div class="col-4 border-right">
      <div class="h6 text-center">發票張數</div>
      <div class="h3 text-center"><?=$count_invoice[0]?>張</div>
    </div>
    <div class="col-4">
      <div class="h6 text-center">消費總金額</div>
      <div class="h3 text-center">$<?=$amount_invoice[0]?></div>
    </div>
  </div>


  <div class="col-12 container pl-4 pr-4">
  <table class="table" cellpadding="5" cellspacing="0">
    <tr>
      <td class="h4 radiusl">日期</td>
      <td class="h4">發票號碼</td>
      <td class="h4">金額</td>
      <td class="h4">類別</td>
      <td class="h4">備註</td>
      <td class="h4 radiusr" colspan="2">操作</td>
    </tr>
    <?php
    foreach($invoice as $key=>$value){
      echo "<tr>";
      echo"<td>$value[2]</td>";
      echo"<td>$value[4]-$value[5]</td>";
      echo"<td>$$value[6]</td>";
      echo"<td>$value[7]</td>";
      echo"<td>$value[8]</td>";
      echo"<td><a href='edit_invoice.php?id=$value[0]' class='btn btn-sm btn-primary'>編輯</a></td>";
      echo"<td><a href='delete_confirm.php?id=$value[0]' class='btn btn-sm btn-danger'>刪除</a></td>";
      echo "</tr>";
    }
    echo"</table>";
    echo"</div>";
  }else{
    
  }
  ?>
  </table>
  <div>

  </div>
</section>
<?php
include_once "main_bottom.php";
?>