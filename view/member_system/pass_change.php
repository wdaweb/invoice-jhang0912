<?php
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>修改密碼</div>
  </div>
  <div class="container">
    <form action="" method="post">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col" class="text-center">舊密碼:</th>
            <td>
              <input type="text" name="acc" value="">
            </td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-center">新密碼:</th>
            <td>
              <input type="text" name="email" value="">
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