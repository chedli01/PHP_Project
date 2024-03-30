<?php
session_start();
if(isset($_SESSION["user_id"])){
    $mysqli=require __DIR__ . "/db_connect.php";
    }
$id=$_GET['id'];
if($_SERVER["REQUEST_METHOD"]=="GET"){

$sql="SELECT * FROM products WHERE productId={$id} LIMIT 1";
$result=$mysqli->query($sql);
$product=$result->fetch_assoc();

}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $productCategory=$_POST["productCategory"];
    $productName=$_POST["productName"];
    $productPrice=$_POST["productPrice"];
    $productDescription=$_POST["productDescription"];
    $quantityInStock=$_POST["quantityInStock"];
    

    $sqli="UPDATE products SET productCategory='$productCategory',productName='$productName',productPrice='$productPrice',productDescription='$productDescription',quantityInStock='$quantityInStock' WHERE productId=$id ";
    $result=$mysqli->query($sqli);
    header("Location:myindex.php");
}
















?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT Products</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post" novalidate>
        <div>
            <label for="productCategory">productCategory</label>
            <input type="text" id="productCategory" name="productCategory" value=<?= $product["productCategory"]?>>
        </div>
        <div>
            <label for="productName">productName</label>
            <input type="text" id="productName" name="productName" value=<?= $product["productName"]?>>
        </div>
        <div>
            <label for="productPrice">productPrice-Number</label>
            <input type="text" id="productPrice" name="productPrice" value=<?= $product["productPrice"]?>>
        </div>
        <div>
            <label for="productDescription">productDescription</label>
            <input type="text" id="productDescription" name="productDescription" value=<?= $product["productDescription"]?>>
        </div>
        
        <div>
            <label for="quantityInStock">quantityInStock</label>
            <input type="text" id="quantityInStock" name="quantityInStock" value=<?= $product["quantityInStock"]?>>
        </div>
        <button>Update</button>



       


    </form>

</body>

</html>