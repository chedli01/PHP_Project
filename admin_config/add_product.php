<?php
session_start();
if(isset($_SESSION["admin_id"])){
    $mysqli=require __DIR__ . "/db_connect.php";
    }
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $productCategory=$_POST["productCategory"];
    $productName=$_POST["productName"];
    $productPrice=$_POST["productPrice"];
    $productDescription=$_POST["productDescription"];
    $quantityInStock=$_POST["quantityInStock"];
    $sql="INSERT INTO products(productCategory,productName,productPrice,productDescription,quantityInStock) Values('$productCategory','$productName','$productPrice','$productDescription','$quantityInStock')";
    $result=$mysqli->query($sql);
    header("Location:myindex.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Products</title>
    <link rel="stylesheet" href="..\style.css">
</head>

<body style="background-color:#edb35c; display:flex; flex-direction:column ; justify-content:center; align-items:center">
<h1>Add Product:</h1>
    <form class="editing-form" method="post" novalidate>
        <div class="form-element">
             <label class="label" for="productCategory">productCategory</label>
            <input class="form-input" type="text" id="productCategory" name="productCategory" >
        </div>
        <div class="form-element">
             <label class="label" for="productName">productName</label>
            <input class="form-input" type="text" id="productName" name="productName" >
        </div>
        <div class="form-element">
             <label class="label" for="productPrice">productPrice-Number</label>
            <input class="form-input" type="text" id="productPrice" name="productPrice" >
        </div>
        <div class="form-element">
             <label class="label" for="productDescription">productDescription</label>
            <input class="form-input" type="text" id="productDescription" name="productDescription">
        </div>
        
        <div class="form-element">
             <label class="label" for="quantityInStock">quantityInStock</label>
            <input class="form-input" type="text" id="quantityInStock" name="quantityInStock" >
        </div>
        <button class="signup-button"> Update</button>



       


    </form>

</body>

</html>