<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/518f89d214.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Noto+Sans+TC:wght@700&family=Rubik&display=swap" rel="stylesheet">    <link rel="stylesheet" href="main.css">
    <title>Document</title>
  <style>
    .text-secondary.h3{
      font-family: 'Fredoka One', cursive;
    }
    button.btn.btn-primary.btn-lg.btn-block{
      background-color: rgb(53, 84, 138);
      color: rgb(245, 220, 179);
    }
    #left
    {
      height: 30rem;
    }
  </style>
</head>
<body>
  <section id="header" class="row p-0 mb-5">
    <div class="left col-sm-12 col-md-12 col-lg-12 d-flex align-items-center justify-content-center">
      <i class="fas fa-file-invoice-dollar pr-3"></i>
      <p class="title text-white m-0">Invoice Awesome</p>
    </div>
  </section>


  <section id="article" class="d-lg-flex">
    <div id="left" class="col-12 col-sm-12 col-md-3 p-0 ">
      <div class="top1 container col-12 d-flex justify-content-center align-items-center mb-2">
      <i class="fas fa-sign-in-alt h3 m-0"></i>
      <div class="pl-3 h3 m-0">歡迎登入</div>
      </div>
      <div class="top2 container col-12 p-4">
        <form>
          <div><?php if(isset($_GET['login_error'])){echo $_GET['login_error'];}?>
          </div>
          <div class="form-group">
            <div class="text-secondary h3">Account</div>
            <input type="text" class="form-control mb-4" name="acc"  placeholder="請輸入帳號" required>
          </div>
          <div class="form-group">
            <div class="text-secondary h3">Password</div>
            <input type="password" class="form-control mb-4"         id="exampleInputPassword1" placeholder="請輸入密碼" required>
          </div>
          <div class="form-group form-check mb-4">
            <input type="checkbox" class="form-check-input mb-4" name="session" value="true" checked><span class="h5 text-secondary">記住用戶帳號</span>

            <a href="add_member.php" class="float-right " style="text-decoration: none;">立即註冊</a>
          </div>
          <button type="button" class="btn btn-primary btn-lg btn-block">立即登入
          </button>
        </form>
    </div>

<?php
include_once "main_bottom.php";
?>