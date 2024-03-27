<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="search-container">
    <form action="search.php" method="GET">
        <input type="text" name="query" placeholder="Search for products...">
        <button type="submit">Search</button>
    </form>


</div>

<?php
// Include necessary files
include '../db/db-config.php';
include '../src/product-repository.php';

// Instantiate ProductRepository
$productRepository = new ProductRepository();

// Fetch all products from the database
$products = $productRepository->getAllProducts();

// Include the product item template and loop through fetched products
foreach ($products as $product) {
    include 'product-item.php'; // Include the HTML template
}
?>
</body>
</html>