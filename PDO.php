<?php
session_start();
$pdo=new PDO('mysql:host=localhost;dbname=invoice;charset=utf8','root','');

function to($target){
  header("location:$target");
}
?>