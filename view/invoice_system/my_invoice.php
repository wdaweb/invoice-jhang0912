<?php
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>我的發票</div>
  </div>

  <div class="text-center">
        <form action="my_invoice.php" method="post">
          請輸入年份 : <input type="text" name="year" pattern="[1982-2020]{4,4}" required>
          <input type="submit" class="btn btn-sm" value="搜尋">
        </form>
  </div>

  <div></div>
</section>
<?php
include_once "main_bottom.php";
?>