<?php
include_once "main_top.php";
?>
<section id="right" class="col-12 col-sm-12 col-md-9 p-0">
  <div class="col-12 h3 d-flex align-items-center">
    <div>我的發票</div>
  </div>

  <div class="container-fluid col-12 mb-3">
    <div class="container d-flex justify-content-center align-items-center bg-danger p-2 rounded">
      <i class="fas fa-exclamation-triangle m-0 h1 mr-2 text-white"></i>
      <div class="error h2 text-white m-0">Error</div>
    </div>
  </div>

  <div class="container-fluid col-12">
    <h3 class="text-center text-danger mb-4">抱歉~可能發生以下錯誤!?</h3>
    <h5 class="text-center text-danger mb-4">● 未登入開獎號碼</h5>
    <h5 class="text-center text-danger mb-4">● 未登入發票資訊</h5>
  </div>

</section>
<?php
include_once "main_bottom.php";
?>