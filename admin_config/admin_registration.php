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
    <title>LOGIN</title>
</head>
<body>
<form method="post">
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
        </div>
        <div>
        <label for="password">Password</label>
            <input type="password" id="password" name="password">

        </div>
        <button >Login</button>

    </form>
    
</body>
</html>