<?php
include_once "../PDO.php";
$search_invoice=$pdo->query("SELECT * FROM `invoice` WHERE `invoice`.`id`='{$_GET['id']}'")->fetch();
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>是否刪除此筆發票資訊!?</div>
  </div>
  <div class="container col-6">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col" class="text-center">日期:</th>
            <td>
              <?=$search_invoice[2]?>
            </td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-center">發票號碼:</th>
            <td>
              <?=$search_invoice[4].'-'.$search_invoice[5]?>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">金額:</th>
            <td>
              $<?=$search_invoice[6]?>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">類別:</th>
            <td>
              <?=$search_invoice[7]?>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">備註:</th>
            <td>
              <?=$search_invoice[8]?>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="d-flex justify-content-center">
                <a href="delete_action.php?id=<?=$search_invoice[0]?>" class="btn mr-1">確認刪除</a>
                <?php
                  switch($search_invoice[3]){
                    case '1':
                      echo "<a href='period.php?period=1&period=1&month=1~2月' class='btn mr-1'>取消</a>";
                    break;
                    case '2':
                      echo "<a href='period.php?period=2&period=2&month=3~4月' class='btn mr-1'>取消</a>";
                    break;
                    case '3':
                      echo "<a href='period.php?period=3&period=3&month=5~6月' class='btn mr-1'>取消</a>";
                    break;
                    case '4':
                      echo "<a href='period.php?period=4&period=4&month=7~8月' class='btn mr-1'>取消</a>";
                    break;
                    case '5':
                      echo "<a href='period.php?period=5&period=5&month=9~10月' class='btn mr-1'>取消</a>";
                    break;
                    case '6':
                      echo "<a href='period.php?period=6&period=6&month=11~12月' class='btn mr-1'>取消</a>";
                    break;
                  }
                ?>
              </div>
            </td>
          </tr>
</section>
<?php
include_once "main_bottom.php";
?>