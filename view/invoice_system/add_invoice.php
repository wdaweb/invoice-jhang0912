<?php
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>發票儲存</div>
  </div>
  <div class="container">
    <form action="" method="post">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col" class="text-center">日期:</th>
            <td>
              <input  type="date" name="date" required>
            </td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-center">期別:</th>
            <td>
              <select name="period" required>
              <option value="1">1~2月</option>
              <option value="2">3~4月</option>
              <option value="3">5~6月</option>
              <option value="4">7~8月</option>
              <option value="5">9~10月</option>
              <option value="6">11~12月</option>
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">發票號碼:</th>
            <td>
              <input type="text" style="width:35px;" name="heading"   pattern="[A-Z]{2,2}" required> -
              <input type="text" style="width:100px;" name="number" pattern="[0-9]{8,8}" required>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">金額:</th>
            <td >
            <input type="number" name="amount" id="amount" min="1" max="99999999" required>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">分類:</th>
            <td >
              <select name="sort">
                <option value="食品酒水">食品酒水</option>
                <option value="居家物業">居家物業</option>
                <option value="行車交通">行車交通</option>
                <option value="交流通訊">交流通訊</option>
                <option value="休閒娛樂">休閒娛樂</option>
                <option value="進修學習">進修學習</option>
                <option value="人情往來">人情往來</option>
                <option value="醫療保健">醫療保健</option>
                <option value="金融保險">金融保險</option>
                <option value="其他雜項">其他雜項</option>
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">備註:</th>
            <td>
            <textarea name="note" cols="30" rows="3"></textarea>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="d-flex justify-content-center">
                <input type="submit" class="btn mr-1" style="text-decoration: none;" value="儲存">
                <input type="reset" class="btn" value="清空">
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