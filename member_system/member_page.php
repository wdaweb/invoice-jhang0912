<?php
include_once "../PDO.php";
include_once "main_top.php";
$year=$pdo->query("SELECT YEAR(`date`) FROM `invoice` ORDER BY `invoice`.`date` DESC LIMIT 1")->fetch();
$count_invoice=$pdo->query("SELECT COUNT(`invoice`.`id`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$year[0]}%'")->fetch();
$amount=$pdo->query("SELECT SUM(`amount`) FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$year[0]}%'")->fetch();
?>
    <section id="right" class="col-12 col-sm-12 col-md-9 p-3 d-flex flex-row align-items-start">
      <div class="col-12 container d-flex border-bottom">
        <div class="col-3 d-flex flex-column justify-content-center align-items-center p-3">
          <img src="../image/Cloud_Strife_from_FFVII_Remake_promo_render.jpg" class="img-fluid mb-2">
          <div class="mb-2 text-secondary">歡迎回來!</div>
          <div class="mb-2 text-secondary">克勞德</div>
        </div>
        
        <div class="col-4 p-3 border-right">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active">會員ID :<span><?php echo"&ensp;",$_SESSION['id']?></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active">用戶名稱 :<span><?php echo"&ensp;",$_SESSION['name']?></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active">電子信箱 :<span><?php echo"&ensp;",$_SESSION['email']?></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active">性別 :<span><?php echo"&ensp;",$_SESSION['gender']?></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active">本年度發票張數 :<?=$count_invoice[0]?>張</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active">本年度消費總金額 :$<?=$amount[0]?></a>
              </li>
            </ul>
        </div>
  
        <div class="col-5 p-3">
          <ul class="m-0">
          <li class="nav-item" style="list-style:none">
                <a class="nav-link active h3">最新公告</a>
              </li>
          </ul>
          <ul class="flex-column">
              <li class="nav-item">
                <a class="nav-link active h5" href="https://www.etax.nat.gov.tw/etw-main/web/ETW183W3_10909/" target="blank">109年09-10月期統一發票特別獎及特獎中獎清冊</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active h5" href="https://www.etax.nat.gov.tw/etw-main/web/ETW183W2_10909/" target="blank">109年09月、10月</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active h5" href="https://www.etax.nat.gov.tw/etw-main/web/ETW183W3_10907/" target="blank">109年07-08月期統一發票特別獎及特獎中獎清冊</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active h5" href="https://www.etax.nat.gov.tw/etw-main/web/ETW183W2_10907/" target="blank">109年07月、08月</a>
              </li>
          </ul>
  
        </div>
      </div>
    </section>

<?php
include_once "main_bottom.php";
?>