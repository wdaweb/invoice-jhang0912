<?php
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>刪除會員資料</div>
  </div>
  <div class="container">
    <h5 class="text-center text-danger">【請重新輸入帳號密碼】</h5>
    <h5 class="text-center text-danger">【注意!!此操作會刪除所有的會員相關資料，請謹慎使用】</h5>
    <form action="" method="post">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col" class="text-center">帳號:</th>
            <td>
              <input type="text" name="acc" value="">
            </td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-center">密碼:</th>
            <td>
              <input type="text" name="email" value="">
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="d-flex justify-content-center">
                <input type="submit" class="btn" style="text-decoration: none;" value="確認刪除">
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