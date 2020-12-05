<?php
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>開獎號碼登入</div>
  </div>
  <div class="container">
    <form action="" method="post">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col" class="text-center">年份:</th>
            <td>
            <input type="text" style="width:60px;" name="year" pattern="[0-9]{4,4}" required>
            </td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-center">期別:</th>
            <td>
              <select name="period">
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
            <th scope="row" class="text-center">獎別:</th>
            <td>
              <select name="category1">
                <option value="1">特別獎</option>
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">號碼:</th>
            <td >
            <input type="text" style="width:110px;" pattern="[0-9]{8,8}" name="number1" required>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">獎別:</th>
            <td>
              <select name="category1">
                <option value="1">特獎</option>
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">號碼:</th>
            <td >
            <input type="text" style="width:110px;" pattern="[0-9]{8,8}" name="number2" required>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">獎別:</th>
            <td>
              <select name="category1">
                <option value="1">頭獎</option>
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">號碼:</th>
            <td >
            <input type="text" style="width:110px;" pattern="[0-9]{8,8}" name="number3" required>
            <input type="text" style="width:110px;" pattern="[0-9]{8,8}" name="number4" required>
            <input type="text" style="width:110px;" pattern="[0-9]{8,8}" name="number5" required>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">獎別:</th>
            <td>
              <select name="category1">
                <option value="1">增開六獎</option>
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">號碼:</th>
              <td>
                <input type="text" style="width:80px;" pattern="[0-9]{3,3}  "   name="number6" required>
                <input type="text" style="width:80px;" pattern="[0-9]{3,3}  "    name="number7">
                <input type="text" style="width:80px;" pattern="[0-9]{3,3}  "    name="number8">
              </td>
          </tr>
        </tbody>
      </table>
      <div class="d-flex justify-content-center">
        <input type="submit" class="btn mr-2"style="text-decorationnone;" value="儲存">
        <input type="reset" class="btn" value="清空">
      </div>
    </form>
  </div>
</section>
<?php
include_once "main_bottom.php";
?>