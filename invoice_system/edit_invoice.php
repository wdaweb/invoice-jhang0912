<?php
include_once "../PDO.php";
$pdo=$pdo->query("SELECT * FROM `invoice` WHERE `id`='{$_GET['id']}'")->fetchAll();
setcookie("invoice_id","{$pdo[0][0]}","time()+3600");
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>發票編輯</div>
  </div>
  <div class="container col-6">
    <form action="update_invoice.php" method="post">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col" class="text-center">日期:</th>
            <td>
              <input  type="date" name="date" value="<?php echo $pdo[0][2]?>" required>
            </td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-center">期別:</th>
            <td>
              <select name="period" required>
              <option value="1" <?php if($pdo[0][3]=='1'){echo "selected";}?>>1~2月</option>
              <option value="2" <?php if($pdo[0][3]=='2'){echo "selected";}?>>3~4月</option>
              <option value="3" <?php if($pdo[0][3]=='3'){echo "selected";}?>>5~6月</option>
              <option value="4" <?php if($pdo[0][3]=='4'){echo "selected";}?>>7~8月</option>
              <option value="5" <?php if($pdo[0][3]=='5'){echo "selected";}?>>9~10月</option>
              <option value="6" <?php if($pdo[0][3]=='6'){echo "selected";}?>>11~12月</option>
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">發票號碼:</th>
            <td>
              <input type="text" style="width:35px;" name="heading"   pattern="[A-Z]{2,2}" value="<?php echo $pdo[0][4]?>" required> -
              <input type="text" style="width:100px;" name="number" value="<?php echo $pdo[0][5]?>" pattern="[0-9]{8,8}" required>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">金額:</th>
            <td >
            <input type="number" name="amount" id="amount" min="1" max="99999999" value="<?php echo $pdo[0][6]?>" required>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">分類:</th>
            <td >
              <select name="sort">
                <option value="食品酒水" <?php if($pdo[0][7]=='食品酒水'){echo "selected";}?>>食品酒水</option>
                <option value="居家物業" <?php if($pdo[0][7]=='居家物業'){echo "selected";}?>>居家物業</option>
                <option value="行車交通" <?php if($pdo[0][7]=='行車交通'){echo "selected";}?>>行車交通</option>
                <option value="交流通訊" <?php if($pdo[0][7]=='交流通訊'){echo "selected";}?>>交流通訊</option>
                <option value="休閒娛樂" <?php if($pdo[0][7]=='休閒娛樂'){echo "selected";}?>>休閒娛樂</option>
                <option value="進修學習" <?php if($pdo[0][7]=='食品酒水'){echo "selected";}?>>進修學習</option>
                <option value="人情往來" <?php if($pdo[0][7]=='進修學習'){echo "selected";}?>>人情往來</option>
                <option value="醫療保健" <?php if($pdo[0][7]=='醫療保健'){echo "selected";}?>>醫療保健</option>
                <option value="金融保險" <?php if($pdo[0][7]=='金融保險'){echo "selected";}?>>金融保險</option>
                <option value="其他雜項" <?php if($pdo[0][7]=='其他雜項'){echo "selected";}?>>其他雜項</option>
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">備註:</th>
            <td>
            <textarea name="note" cols="30" rows="3"><?php echo $pdo[0][8]?></textarea>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="d-flex justify-content-center">
                <input type="submit" class="btn mr-1" style="text-decoration: none;" value="儲存">
                <?php
    switch($pdo[0][3]){
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
        </tbody>
      </table>
    </form>
  </div>
</section>
<?php
include_once "main_bottom.php";
?>