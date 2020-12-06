<?php
include_once "../PDO.php";
$period_invoice=$pdo->query("SELECT * FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_COOKIE['year']}%' && `period` = '{$_GET['period']}' ORDER BY `date` DESC")->fetchALL();
$count_invoice=$pdo->query("SELECT COUNT(`invoice`.`id`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_COOKIE['year']}%' && `period` = '{$_GET['period']}'")->fetch();
$amount_invoice=$pdo->query("SELECT SUM(`invoice`.`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_COOKIE['year']}%' && `period` = '{$_GET['period']}'")->fetch();
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>我的發票</div>
  </div>
  <div class="container">
    <div class="d-flex justify-content-center mb-2">
    <a class="btn mr-2 " href="period.php?year=<?=$_COOKIE['year']?>&period=1&period=1&month=1~2月">1~2月</a>
    <a class="btn mr-2 " href="period.php?year=<?=$_COOKIE['year']?>&period=2&period=2&month=3~4月">3~4月</a>
    <a class="btn mr-2 " href="period.php?year=<?=$_COOKIE['year']?>&period=3&period=3&month=5~6月">5~6月</a>
    <a class="btn mr-2 " href="period.php?year=<?=$_COOKIE['year']?>&period=4&period=4&month=7~8月">7~8月</a>
    <a class="btn mr-2 " href="period.php?year=<?=$_COOKIE['year']?>&period=5&period=5&month=9~10月">9~10月</a>
    <a class="btn mr-2 " href="period.php?year=<?=$_COOKIE['year']?>&period=6&period=6&month=11~12月">11~12月</a>
  </div>

  <button type="button" class="btn btn-primary btn-lg btn-block col-12 mb-2">一鍵對獎</button>

  <div class="col-12 container-fluid d-flex justify-content-center mb-2">
    <div class="col-3 border-right ">
      <div class="h6 text-center">年月份</div>
      <div class="h3 text-center"><?=$_COOKIE['year'].'年'.$_GET['month']?></div>
    </div>
    <div class="col-3 border-right">
      <div class="h6 text-center">發票張數</div>
      <div class="h3 text-center"><?=$count_invoice[0]?>張</div>
    </div>
    <div class="col-3 border-right">
      <div class="h6 text-center">消費總金額</div>
      <div class="h3 text-center">$<?=$amount_invoice[0]?></div>
    </div>
    <div class="col-3">
      <div class="h6 text-center">中獎金額</div>
      <div class="h3 text-center">$</div>
    </div>
  </div>



  </div>
</section>
<?php
include_once "main_bottom.php";
?>