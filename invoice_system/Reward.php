<?php
include_once "../PDO.php";
$period_invoice=$pdo->query("SELECT `id`,`number`,`note` FROM `invoice` WHERE `member_id`='{$_SESSION['id']}' && `date` LIKE '{$_COOKIE['year']}%' && `period` = '{$_GET['period']}'")->fetchALL();
$award_number=$pdo->query("SELECT `category`,`number` FROM `award_numbers` WHERE `member_id`='{$_SESSION['id']}' && `year`='{$_COOKIE['year']}' && `period`='{$_GET['period']}'")->fetchALL();
include_once "main_top.php";
$lucky2=0;
if(!empty($award_number) && !empty($period_invoice)){
    echo "<section id='right' class='col-12 col-sm-12 col-md-9 p-0'>";
    echo "<div class='col-12 h3 d-flex align-items-center'>";
    echo "<div>我的發票</div>";
    echo "</div>";
    echo "<div class='container-fluid col-12 mb-3'>";
    echo "<div class='container d-flex justify-content-center align-items-center bg-danger p-2 rounded'>";
    echo "<i class='fas fa-thumbs-up h1 text-white mr-3 mb-0'></i>";
    echo "<div class='error h2 text-white m-0'>Congratulations ! !</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='col-7 container'>";
  // 對獎
  foreach($period_invoice as $key=>$value){
  
    switch($value[1]){
      // 特別獎1000萬
      case "{$award_number[0][1]}":
        echo "<div class='h5 text-left mb-3'>● 發票ID:".$value[0]." 備註 : ".$value[2]."中了特別獎1000萬元</div>";
        $lucky2=$lucky2+1;
      break;
      // 特獎
      case "{$award_number[1][1]}":
        echo "<div class='h5 text-left mb-3'>● 發票ID:".$value[0]." 備註 : ".$value[2]."中了特獎200萬元</div>";
        $lucky2=$lucky2+1;
      break;
    }
    // 增開六獎
    $tail_three=substr("$value[1]", -3);
    // echo "<br>";
    if(!empty($award_number[7][1])){
      switch($tail_three){
        case "{$award_number[5][1]}":
          echo "<div class='h5 text-left mb-3'>● 發票ID:".$value[0]." 備註 : ".$value[2]."中了增開六獎200元</div>";
          $lucky2=$lucky2+1;
        break;
        case "{$award_number[6][1]}":
          echo "<div class='h5 text-left mb-3'>● 發票ID:".$value[0]." 備註 : ".$value[2]."中了增開六獎200元</div>";
          $lucky2=$lucky2+1;
        break;
        case "{$award_number[7][1]}":
          echo "<div class='h5 text-left mb-3'>● 發票ID:".$value[0]." 備註 : ".$value[2]."中了增開六獎200元</div>";
          $lucky2=$lucky2+1;
        break;
      }
    }elseif(!empty($award_number[6][1])){
          switch($tail_three){
            case "{$award_number[5][1]}":
              echo "<div class='h5 text-left mb-3'>● 發票ID:".$value[0]." 備註 : ".$value[2]."中了增開六獎200元</div>";
              $lucky2=$lucky2+1;
            break;
            case "{$award_number[6][1]}":
              echo "<div class='h5 text-left mb-3'>● 發票ID:".$value[0]." 備註 : ".$value[2]."中了增開六獎200元</div>";
              $lucky2=$lucky2+1;
            break;
          }
        }else{
          if($tail_three==$award_number[5][1]){
            echo "<div class='h5 text-left mb-3'>● 發票ID:".$value[0]." 備註 : ".$value[2]."中了增開六獎200元</div>";
            $lucky2=$lucky2+1;
          }
        }
    //頭獎
    $array=[
      '3'=>'六獎200元',
      '4'=>'五獎1000元',
      '5'=>'四獎4000元',
      '6'=>'三獎1萬元',
      '7'=>'二獎4萬元',
      '8'=>'頭獎20萬元'
    ];
    $lucky="";
    for($i=3;$i<=8;$i++){
      $tail_number=substr("$value[1]", -$i);
      $award_number1=substr($award_number[2][1], -$i);
      $award_number2=substr($award_number[3][1], -$i);
      $award_number3=substr($award_number[4][1], -$i);
      
      switch($tail_number){
        case "{$award_number1}":
          $lucky=$i;
          $lucky2=$lucky2+1;
        break;
        case "{$award_number2}":
          $lucky=$i;
          $lucky2=$lucky2+1;
        break;
        case "{$award_number3}":
          $lucky=$i;
          $lucky2=$lucky2+1;
        break;
      }
    }
    if($lucky!=""){
      echo "<div class='h5 text-left mb-3'>● 發票ID:".$value[0]." 備註 : ".$value[2]."中了".$array[$lucky]."</div>";
    }else{}
  
  }
  echo "</div>";
  echo "</section>";

  }elseif($lucky2!=0){
    echo "<section id='right' class='col-12 col-sm-12 col-md-9 p-0'>";
    echo "<div class='col-12 h3 d-flex align-items-center'>";
    echo "<div>我的發票</div>";
    echo "</div>";
    echo "<div class='container-fluid col-12 mb-3'>";
    echo "<div class='container d-flex justify-content-center align-items-center bg-danger p-2 rounded'>";
    echo "<i class='fas fa-heart-broken m-0 h1 mr-2 text-white'></i>";
    echo "<div class='error h2 text-white m-0'>Sad</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='container-fluid col-12'>";
    echo "<h3 class='text-center text-danger mb-4'>慟~哭哭沒中獎!?</h3>";
    echo "</div>";
    echo "</section>";

  }else{
    echo "<section id='right' class='col-12 col-sm-12 col-md-9 p-0'>";
    echo "<div class='col-12 h3 d-flex align-items-center'>";
    echo "<div>我的發票</div>";
    echo "</div>";
    echo "<div class='container-fluid col-12 mb-3'>";
    echo "<div class='container d-flex justify-content-center align-items-center bg-danger p-2 rounded'>";
    echo "<i class='fas fa-exclamation-triangle m-0 h1 mr-2 text-white'></i>";
    echo "<div class='error h2 text-white m-0'>Error</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='container-fluid col-12'>";
    echo "<h3 class='text-center text-danger mb-4'>抱歉~可能發生以下錯誤!?</h3>";
    echo "<h5 class='text-center text-danger mb-4'>● 未登入開獎號碼</h5>";
    echo "<h5 class='text-center text-danger mb-4'>● 未登入發票資訊</h5>";
    echo "</div>";
    echo "</section>";
  }
?>
<?php
include_once "main_bottom.php";
?>