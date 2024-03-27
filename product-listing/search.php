<?php
include_once 'fetch-products/fetch-all-products.php';

// Function to perform a search in an array of products
function searchProducts($products, $searchQuery) {
    $searchResults = array();

    // Iterate through each product
    foreach ($products as $product) {
        // Check if the search query is found in the product name or description
        if (stripos($product->productName, $searchQuery) !== false || 
            stripos($product->productDescription, $searchQuery) !== false) {
            $searchResults[] = $product;
        }
    }

    return $searchResults;
}

// // Example usage:
// // Assume $products is an array of Product objects retrieved from the database
// // $searchQuery is the value entered in the search bar

// // Perform the search
// $searchResults = searchProducts($products, $searchQuery);

// // Display search results
// if (empty($searchResults)) {
//     echo "No results found for \"$searchQuery\".";
// } else {
//     echo "Search results for \"$searchQuery\":<br>";
//     foreach ($searchResults as $product) {
//         echo $product->getName() . "<br>";
//         echo $product->getDescription() . "<br>";
//         echo "<hr>";
//     }
// }



// Check if the search query parameter is set in the URL
if(isset($_GET['query'])) {
    // Sanitize and store the search query
    $searchQuery = htmlspecialchars($_GET['query']);

    // Perform your search logic here
    // Example: searchProducts($products, $searchQuery);
    // Display search results or perform other actions
    $foundProducts = searchProducts($products,$searchQuery);
    if(empty($foundProducts)){
        echo "No products were found";
    }
    foreach($foundProducts as $product) {
        echo $product->generateProductItemHTML();
    }
    
} else {
    // No search query provided
    echo "No search query specified.";
}
?>
