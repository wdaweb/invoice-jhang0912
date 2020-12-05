<?php
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>消費統計-當期消費統計</div>
  </div>
  <h4 class="text-center"><a href="" class="btn" style="text-decoration: none;">年度消費統計</a></h4>
  <div class="text-center">
        <form action="my_invoice.php" method="post">
          請輸入年份 : <input type="text" name="year" pattern="[1982-2020]{4,4}" required>
          <input type="submit" class="btn btn-sm" value="搜尋">
        </form>
  </div>

</section>
<?php
include_once "main_bottom.php";
?>