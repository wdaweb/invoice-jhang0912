<?php
include_once "../PDO.php";
$period_invoice=$pdo->query("SELECT `id`,`number`,`note` FROM `invoice` WHERE `date` LIKE '{$_COOKIE['year']}%' && `period` = '{$_GET['period']}'")->fetchALL();
$award_number=$pdo->query("SELECT `category`,`number` FROM `award_numbers` WHERE `year`='{$_COOKIE['year']}' && `period`='{$_GET['period']}'")->fetchALL();
// echo "<pre>";
// print_r($period_invoice);
// echo "</pre>";
// echo "<pre>";
// print_r($award_number);
// echo "</pre>";

// 對獎
foreach($period_invoice as $key=>$value){
  // echo "<pre>";
  // print_r($value);
  // echo "</pre>";

  switch($value[1]){
    // 特別獎1000萬
    case "{$award_number[0][1]}":
      echo "發票ID:".$value[0]." 備註 : ".$value[2]."中了特別獎1000萬元<br>";
    break;
    // 特獎
    case "{$award_number[1][1]}":
      echo "發票ID:".$value[0]." 備註 : ".$value[2]."中了特獎200萬元<br>";
    break;
  }
  // 增開六獎
  $tail_three=substr("$value[1]", -3);
  // echo "<br>";
  if(!empty($award_number[7][1])){
    switch($tail_three){
      case "{$award_number[5][1]}":
        echo "發票ID:".$value[0]." 備註 : ".$value[2]."中了增開六獎200元<br>";
      break;
      case "{$award_number[6][1]}":
        echo "發票ID:".$value[0]." 備註 : ".$value[2]."中了增開六獎200元<br>";
      break;
      case "{$award_number[7][1]}":
        echo "發票ID:".$value[0]." 備註 : ".$value[2]."中了增開六獎200元<br>";
      break;
    }
  }elseif(!empty($award_number[6][1])){
        switch($tail_three){
          case "{$award_number[5][1]}":
            echo "發票ID:".$value[0]." 備註 : ".$value[2]."中了增開六獎200元<br>";
          break;
          case "{$award_number[6][1]}":
            echo "發票ID:".$value[0]." 備註 : ".$value[2]."中了增開六獎200元<br>";
          break;
        }
      }else{
        if($tail_three==$award_number[5][1]){
          echo "發票ID:".$value[0]." 備註 : ".$value[2]."中了增開六獎200元<br>";
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
      break;
      case "{$award_number2}":
        $lucky=$i;
      break;
      case "{$award_number3}":
        $lucky=$i;
      break;
    }
  }
  if($lucky!=""){
    echo "發票ID:".$value[0]." 備註 : ".$value[2]."中了".$array[$lucky]."<br>";
  }else{}


}
?>