<?php
include_once "../../PDO.php";
$year=$_POST['year'];
$period=$_POST['period'];
$category1=$_POST['category1'];
$category2=$_POST['category2'];
$category3=$_POST['category3'];
$category4=$_POST['category4'];
$number1=$_POST['number1'];
$number2=$_POST['number2'];
$number3=$_POST['number3'];
$number4=$_POST['number4'];
$number5=$_POST['number5'];
$number6=$_POST['number6'];
$number7=$_POST['number7'];
$number8=$_POST['number8'];

if(empty($number8)){
  if(empty($number7)){
    if(empty($number6)){
      $insert_number="INSERT INTO
      `award_numbers`(`year`, `period`, `category`, `number`) 
      VALUES 
      ('$year','$period','$category1','$number1'),
      ('$year','$period','$category2','$number2'),
      ('$year','$period','$category3','$number3'),
      ('$year','$period','$category3','$number4'),
      ('$year','$period','$category3','$number5')";
      $pdo->exec($insert_number);
    }else{
      $insert_number="INSERT INTO
      `award_numbers`(`year`, `period`, `category`, `number`) 
      VALUES 
      ('$year','$period','$category1','$number1'),
      ('$year','$period','$category2','$number2'),
      ('$year','$period','$category3','$number3'),
      ('$year','$period','$category3','$number4'),
      ('$year','$period','$category3','$number5'),
      ('$year','$period','$category4','$number6')";
      $pdo->exec($insert_number);
    }
  }else{
    $insert_number="INSERT INTO
    `award_numbers`(`year`, `period`, `category`, `number`) 
    VALUES 
    ('$year','$period','$category1','$number1'),
    ('$year','$period','$category2','$number2'),
    ('$year','$period','$category3','$number3'),
    ('$year','$period','$category3','$number4'),
    ('$year','$period','$category3','$number5'),
    ('$year','$period','$category4','$number6'),
    ('$year','$period','$category4','$number7')";
    $pdo->exec($insert_number);
  }
}else{
  $insert_number="INSERT INTO
`award_numbers`(`year`, `period`, `category`, `number`) 
VALUES 
('$year','$period','$category1','$number1'),
('$year','$period','$category2','$number2'),
('$year','$period','$category3','$number3'),
('$year','$period','$category3','$number4'),
('$year','$period','$category3','$number5'),
('$year','$period','$category4','$number6'),
('$year','$period','$category4','$number7'),
('$year','$period','$category4','$number8')";
$pdo->exec($insert_number);
}

?>