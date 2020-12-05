<?php
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>資料編輯</div>
  </div>
  <div class="container">
    <form action="" method="post">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col" class="text-center">帳號:</th>
            <td>
              <input readonly type="text" name="acc" value="">
            </td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-center">密碼:</th>
            <td>
              <a href="" style="text-decoration: none;" class="text-secondary">修改</a>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">電子信箱:</th>
            <td>
              <input type="text" name="email" value="">
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">用戶名稱:</th>
            <td >
              <input type="text" name="name" value="">
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center">性別:</th>
            <td >
              <input readonly type="text" value="">
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="d-flex justify-content-center">
                <input type="submit" class="btn" style="text-decoration: none;" value="確認修改">
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