<?php
session_start();
if(isset($_SESSION['user_id'])){
    header("Location:../public/product-list-page.php");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $mysqli=require __DIR__ . "/database.php";
    $sql=sprintf("SELECT * FROM user 
          WHERE email='%s'",$mysqli->real_escape_string($_POST["email"]));
    $result=$mysqli->query($sql);
    $user=$result->fetch_assoc();

    if($user){
        if($_POST["password"]==$user["password_hash"]){
            session_start();
            session_regenerate_id();
            $_SESSION["user_id"]=$user["id"];
            header("Location:../public/product-list-page.php");
            exit;
        }
        else{
           session_abort();
        }
    }
    else{
        session_abort();
    }

}







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
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