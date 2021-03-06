<?php
include_once "../PDO.php";
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>刪除會員資料</div>
  </div>
  <div class="container">
    <div class="text-center text-danger mb-2"><?php if(isset($_GET['delete'])){echo $_GET['delete'];}?></div>
    <h5 class="text-center text-danger">【請重新輸入帳號密碼】</h5>
    <h5 class="text-center text-danger">【注意!!此操作會刪除所有的會員相關資料，請謹慎使用】</h5>
    <form action="delete.php" method="post">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col" class="text-center">帳號:</th>
            <td>
              <input type="text" name="acc" required>
            </td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-center">密碼:</th>
            <td>
              <input type="password" name="pass" required>
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