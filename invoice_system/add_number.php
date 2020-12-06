<?php
include_once "../PDO.php";
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>開獎號碼登入</div>
  </div>
  <div class=" text-secondary col-6 border p-2">
  <form action="add_number_action.php" method="post">
    年份:<input type="text" style="width:50px;" name="year" pattern="[0-9]{4,4}" required>
    <div>
    期別:
      <select name="period">
      <option value="1">1~2月</option>
      <option value="2">3~4月</option>
      <option value="3">5~6月</option>
      <option value="4">7~8月</option>
      <option value="5">9~10月</option>
      <option value="6">11~12月</option>
      </select>
    </div>
    <hr>
    <!-- 特別獎 -->
    獎別:
      <select name="category1">
      <option value="1">特別獎</option>
      </select>
    <div>號碼:<input type="text" style="width:90px;" pattern="[0-9]{8,8}" name="number1" required></div>
    <hr>
    <!-- 特獎 -->
    獎別:
      <select name="category2">
      <option value="2">特獎</option>
      </select>
      <div>號碼:<input type="text" style="width:90px;" pattern="[0-9]{8,8}" name="number2" required></div>
      <hr>
      <!-- 頭獎 -->
      獎別:
        <select name="category3">
        <option value="3">頭獎</option>
        </select>
    <div>號碼:
      <input type="text" style="width:90px;" pattern="[0-9]{8,8}" name="number3" required>
      <input type="text" style="width:90px;" pattern="[0-9]{8,8}" name="number4" required>
      <input type="text" style="width:90px;" pattern="[0-9]{8,8}" name="number5" required>
    </div>
    <hr>
    <!-- 增開六獎 -->
    獎別:
      <select name="category4">
      <option value="4">增開六獎</option>
      </select>
    <div class="mb-2">號碼:
      <input type="text" style="width:90px;" pattern="[0-9]{3,3}" name="number6" required>
      <input type="text" style="width:90px;" pattern="[0-9]{3,3}" name="number7">
      <input type="text" style="width:90px;" pattern="[0-9]{3,3}" name="number8">
    </div>
    <div class="text-center">
      <input type="submit" class="btn" value="儲存">
      <input type="reset" class="btn" value="清空">
    </div>
  </form>
  </div>
</section>
<?php
include_once "main_bottom.php";
?>