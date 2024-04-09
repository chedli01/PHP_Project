<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $mysqli=require __DIR__ . "/db_connect.php";
    $sql=sprintf("SELECT * FROM admin WHERE email='%s'",$mysqli->real_escape_string($_POST["email"]));
    $result=$mysqli->query($sql);
    $admin=$result->fetch_assoc();
    if($admin){
        if($_POST["password"]==$admin["password"]){
            session_start();
            session_regenerate_id();
            $_SESSION["admin_id"]=$admin["id"];
            header("Location:myindex.php");
            exit;
        }
    }
}











?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="..\style.css" rel="stylesheet">
</head>
<body class="home-body" style="background-color:#2F296C; display: flex; justify-content:center; align-items: center; height:90vh">
<form style="width:fit-content ; background-color: #938edc; padding:20px 30px; border-radius: 20px" method="post">
        <h1 style="color:#2F296C"> Welcome Back !</h1>
        <div class="form-element">
            <label class="label" for="email">Email : </label>
            <input class="form-input" type="text" id="email" name="email">
        </div>
        <div class="form-element">
        <label class="label" for="password">Password : </label>
            <input class="form-input" type="password" id="password" name="password">
            </div>
        <button class="signup-button" >Login</button>
        

    </form>
    
</body>
</html>