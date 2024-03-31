<?php
// Function to perform a search in an array of products
function searchProducts($products, $searchQuery) {
    $searchResults = array();

    // Iterate through each product
    foreach ($products as $product) {
        // Check if the search query is found in the product name or description
        if (stripos($product["productName"], $searchQuery) !== false || 
            stripos($product["productDescription"], $searchQuery) !== false) {
            $searchResults[] = $product;
        }
    }

    return $searchResults;
}
?>
