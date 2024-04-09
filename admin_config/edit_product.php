<?php
session_start();
if(isset($_SESSION["admin_id"])){
    $mysqli = require __DIR__ . "/db_connect.php";
}

$id = $_GET['id'];

$errorMessages = [];

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $sql = "SELECT * FROM products WHERE productId={$id} LIMIT 1";
    $result = $mysqli->query($sql);
    $product = $result->fetch_assoc();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $productCategory = $_POST["productCategory"];
    $productName = $_POST["productName"];
    $productPrice = $_POST["productPrice"];
    $productDescription = $_POST["productDescription"];
    $quantityInStock = $_POST["quantityInStock"];

    // Validate inputs
    if(empty($productCategory)) {
        $errorMessages['productCategory'] = 'Product category is required.';
    }
    if(empty($productName)) {
        $errorMessages['productName'] = 'Product name is required.';
    }
    if(empty($productPrice)) {
        $errorMessages['productPrice'] = 'Product price is required.';
    }
    if(empty($productDescription)) {
        $errorMessages['productDescription'] = 'Product description is required.';
    }
    if(empty($quantityInStock)) {
        $errorMessages['quantityInStock'] = 'Quantity in stock is required.';
    }

    if(empty($errorMessages)) {
        $sql = "UPDATE products SET productCategory='$productCategory', productName='$productName', productPrice='$productPrice', productDescription='$productDescription', quantityInStock='$quantityInStock' WHERE productId=$id";
        $result = $mysqli->query($sql);
        header("Location: myindex.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT Products</title>
    <link rel="stylesheet" href="..\style.css">
</head>

<body class="editing-body">
    <h1>Edit Product</h1>
    <form class="editing-form" method="post" novalidate>    
        <div class="form-element">
            <label class="label" for="productCategory">productCategory</label>
            <input class="form-input" type="text" id="productCategory" name="productCategory" value="<?= $product["productCategory"]?>">
            <?php if(isset($errorMessages['productCategory'])): ?>
                <p class="error-message"><?= $errorMessages['productCategory'] ?></p>
            <?php endif; ?>
        </div>
        <div class="form-element">
            <label class="label" for="productName">productName</label>
            <input class="form-input" type="text" id="productName" name="productName" value="<?= $product["productName"]?>">
            <?php if(isset($errorMessages['productName'])): ?>
                <p class="error-message"><?= $errorMessages['productName'] ?></p>
            <?php endif; ?>
        </div>
        <div class="form-element">
            <label class="label" for="productPrice">productPrice-Number</label>
            <input class="form-input" type="text" id="productPrice" name="productPrice" value="<?= $product["productPrice"]?>">
            <?php if(isset($errorMessages['productPrice'])): ?>
                <p class="error-message"><?= $errorMessages['productPrice'] ?></p>
            <?php endif; ?>
        </div>
        <div class="form-element">
            <label class="label" for="productDescription">productDescription</label>
            <input class="form-input" type="text" id="productDescription" name="productDescription" value="<?= $product["productDescription"]?>">
            <?php if(isset($errorMessages['productDescription'])): ?>
                <p class="error-message"><?= $errorMessages['productDescription'] ?></p>
            <?php endif; ?>
        </div>
        
        <div class="form-element">
            <label class="label" for="quantityInStock">quantityInStock</label>
            <input class="form-input" type="text" id="quantityInStock" name="quantityInStock" value="<?= $product["quantityInStock"]?>">
            <?php if(isset($errorMessages['quantityInStock'])): ?>
                <p class="error-message"><?= $errorMessages['quantityInStock'] ?></p>
            <?php endif; ?>
        </div>
        <button class="signup-button">Update</button>
    </form>
</body>

</html>
