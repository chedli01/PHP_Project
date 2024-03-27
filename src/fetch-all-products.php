<?php

// Include database connection file
include '../database-connection.php';

// Include the Product class file
include './fetch-products/product.php';

// SQL query to fetch all products
$sql = "SELECT * FROM products";

// Execute the query
$result = $conn->query($sql);

// Check if there are any rows returned
$products = [];
if ($result->num_rows > 0) {
    // Fetch data and create Product objects
    while($row = $result->fetch_assoc()) {
        // Create a Product object for each row and add it to the products array
        $product = new Product($row["productId"], $row["productCategory"], $row["productName"], $row["productPrice"], $row["productDescription"], $row["quantityInStock"]);
        $products[] = $product;
        
    }
}

// Close connection
$conn->close();

?>
