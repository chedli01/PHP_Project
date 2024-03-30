<?php
if (empty($_POST["FirstName"])){
    die("FirstName is required");
}
if (empty($_POST["LastName"])){
    die("LastName is required");
}
if (!is_numeric($_POST["phone"])){
    die("Phone-Number should be numeric");
}
if(strlen($_POST["phone"])!=8){
    die("Phone-Number should be formed with 8 numbers");
}
if (empty($_POST["adress"])){
    die("Adress is required");
}


if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    die("Valid Email is required");
}
if(strlen($_POST["password"])<8){
    die("Password must be at least 8 characters");
}
if(!preg_match("/[a-z]/i",$_POST["password"])){
    die("Password must contain at least one letter");
}
if(!preg_match("/[0-9]/",$_POST["password"])){
    die("Password must contain at least one number");
}
if($_POST["password"]!=$_POST["password_confirmation"]){
    die("Passwords must match");

}

$password_hash=password_hash($_POST["password"],PASSWORD_DEFAULT);

$mysqli=require __DIR__ . "/database.php";

$sql="INSERT INTO user(FirstName,LastName,phone,adress,email,password_hash)
      Values (?,?,?,?,?,?)";
$stmt=$mysqli->stmt_init();
if(!$stmt->prepare($sql)){
    die("SQL error");
}
$stmt->bind_param("ssssss",$_POST["FirstName"],$_POST["LastName"],$_POST["phone"],$_POST["adress"],$_POST["email"],$password_hash);
if($stmt->execute()){
    header("Location:signup-success.html");
}
else{
    die($mysqli->error ." " .$mysqli->errno);
}
?>