<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<script
    src="https://kit.fontawesome.com/471de5d1b2.js"
    crossorigin="anonymous"
  ></script>
<body class="home-body">
<?php include 'db\db-config.php'?>
<?php
session_start();
$PATH_TO_SHOP = "./public/product-list-page.php";
$PATH_TO_LOGIN = "./Signup/login.php";
$PATH_TO_LOGOUT = "./Signup/logout.php";
$PATH_TO_SIGNUP = "./Signup/signup.php";
$PATH_TO_ABOUT = "about.php";
$PATH_TO_CONTACT = "#";
include 'header.php'; ?>  
<div style="display: flex; justify-content: center; align-items:center ;height:80vh; gap: 100px">
        <div style="display: flex; flex-direction:column; justify-content:center; align-items:center"><h1 style="width:40vw ;">Shop the latest tech gadgets today and experience innovation at your fingertips. Explore our curated collection of smartphones, tablets, laptops, headphones, and more.</h1>
        <div class="button" style="">Shop Now</div>
        </div>
        <img style="scale:125%" src="..\src\images\Capture_d_écran_2024-03-28_202620-removebg-preview.png" alt="">

</div>
<br/>
<br/>
<section>
        <h1 style="font-size:50px;  color:#E82D62">Why Choose Us ?</h1>
<div class="card-container">
<?php include "reviews.php"?>
</div>
</section>
<?php include "footer.php" ?>

</body>
</html>