<?php
session_start();
if(isset($_SESSION["admin_id"])){
    $mysqli=require "../db/db-config.php";
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
    <title>Form Validation</title>
    <link rel="stylesheet" href="..\style.css">
</head>

<body class="editing-body">
    <h1>Add Product:</h1>
    <form class="editing-form" method="post" novalidate>
    <div>
    <div class="form-element">
        <label class="label" for="productCategory">Product Category</label>
        <input class="form-input" type="text" id="productCategory" name="productCategory">
    </div>  
    <p class="error-message" id="productCategoryError"></p>
</div>
<div>
    <div class="form-element">
        <label class="label" for="productName">Product Name</label>
        <input class="form-input" type="text" id="productName" name="productName">
    </div>
    <p class="error-message" id="productNameError"></p>
</div>
<div>
    <div class="form-element">
        <label class="label" for="productPrice">Product Price</label>
        <input class="form-input" type="text" id="productPrice" name="productPrice">
    </div>
    <p class="error-message" id="productPriceError"></p>
</div>
<div>
    <div class="form-element">
        <label class="label" for="productDescription">Product Description</label>
        <input class="form-input" type="text" id="productDescription" name="productDescription">
    </div>
    <p class="error-message" id="productDescriptionError"></p>
</div>
<div>
    <div class="form-element">
        <label class="label" for="quantityInStock">Quantity In Stock</label>
        <input class="form-input" type="text" id="quantityInStock" name="quantityInStock">
    </div>
    <p class="error-message" id="quantityInStockError"></p>
</div>

        <button class="signup-button">Update</button>
    </form>

    <script src="..\src\scripts\validating-form.js">
        
    </script>

</body>

</html>
