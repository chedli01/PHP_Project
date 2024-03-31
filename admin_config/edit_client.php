<?php
session_start();
if(isset($_SESSION["admin_id"])){
    $mysqli=require __DIR__ . "/db_connect.php";
    }
$id=$_GET['id'];
if($_SERVER["REQUEST_METHOD"]=="GET"){

$sql="SELECT * FROM user WHERE id={$id} LIMIT 1";
$result=$mysqli->query($sql);
$user=$result->fetch_assoc();

}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname=$_POST["FirstName"];
    $lastname=$_POST["LastName"];
    $phone=$_POST["phone"];
    $adress=$_POST["adress"];
    $email=$_POST["email"];
    

    $sqli="UPDATE user SET FirstName='$firstname',LastName='$lastname',phone='$phone',adress='$adress',email='$email' WHERE id=$id ";
    $result=$mysqli->query($sqli);
    header("Location:myindex.php");
}
















?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post" novalidate>
        <div>
            <label for="FirstName">FirstName</label>
            <input type="text" id="FirstName" name="FirstName" value=<?= $user["FirstName"]?>>
        </div>
        <div>
            <label for="LastName">LastName</label>
            <input type="text" id="LastName" name="LastName" value=<?= $user["LastName"]?>>
        </div>
        <div>
            <label for="phone">Phone-Number</label>
            <input type="text" id="phone" name="phone" value=<?= $user["phone"]?>>
        </div>
        <div>
            <label for="adress">Adress</label>
            <input type="text" id="adress" name="adress" value=<?= $user["adress"]?>>
        </div>
        
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value=<?= $user["email"]?>>
        </div>
        <button>Update</button>



       


    </form>

</body>

</html>