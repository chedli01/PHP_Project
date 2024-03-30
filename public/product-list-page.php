<?php
// Start the session
session_start();
// Include necessary files
include '../db/db-config.php';
include '../src/product-repository.php';



// Check if products are already fetched and stored in the session
if (!isset($_SESSION['products'])) {
    // Instantiate ProductRepository
    $productRepository = new ProductRepository();

    // Fetch all products from the database
    $products = $productRepository->getAllProducts();


    // Store fetched products in the session
    $_SESSION['products'] = $products;
} else {
    // Retrieve products from the session
    $products = $_SESSION['products'];
}

if(isset($_GET['query'])) {
    // Sanitize and store the search query
    $searchQuery = htmlspecialchars($_GET['query']);
    include "../src/search.php";

    $products = searchProducts($products,$searchQuery);
    if(empty($products)){
        echo "No products were found";
    }
    
    
}

if (isset($_COOKIE['category']) && $_COOKIE['category'] != 'All' ) {
   
    $selectedCategory = $_COOKIE['category'];
   
    // Filter products by category
    $products = array_filter($products, function ($product) use ($selectedCategory) {
        return $product['productCategory'] == $selectedCategory;
    });

}

// Check if price range filter is set in the cookie
if (isset($_COOKIE['priceRange']) && $_COOKIE['priceRange'] != '0,0' ) {
   
    $selectedPriceRange = $_COOKIE['priceRange'];
   
    // Split price range into min and max values
    list($minPrice, $maxPrice) = explode(',', $selectedPriceRange);
    $minPrice = (float)$minPrice;
    $maxPrice = (float)$maxPrice;
    
    // Filter products by price range
    $products = array_filter($products, function ($product) use ($minPrice, $maxPrice) {
        return $product['productPrice'] >= $minPrice && $product['productPrice'] <= $maxPrice;
    });

   
}

?>

<?php 
//initialize user's shopping cart 
    $_SESSION["user_id"] = 1; // for testing
    if(!isset($_SESSION["user_id"])){ //check ken fama user 3amel login men aslou
        echo "no user is currently logged in";
    }
    else{
        
        include "../src/shopping-cart/shopping-cart.php";
        $testArray = array(
            array("product"=>$products[0],"quantity"=>2),
            array("product"=>$products[1],"quantity"=>5),
            array("product"=>$products[2],"quantity"=>3)
        );
        $userShoppingCart = new ShoppingCart($productsInCart=$testArray,$_SESSION["user_id"]);
    }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/styles/global-styles.css">
    <link rel="stylesheet" href="../src/styles/filter-options.css">
    <link rel="stylesheet" href="../src/styles/product-card.css">
    <link rel="stylesheet" href="../src/styles/search.css">
    <title>Document</title>
</head>
<body>
    <?php include "shopping-cart.php" ?>
<div class="search-container">
    <form action="" method="GET">
        <input type="text" name="query" placeholder="Search for products...">
        <button type="submit">Search</button>
        <button type="button"id="applyFilters">Apply Filters</button>
    </form>
    
</div>

<?php include "filters.html";
include "../src/pagination-util.php";
include_once '../src/pagination-config.php';
 ?>

<div class="pagination-links">
    <?php echo generatePaginationLinks($totalPages); ?>
</div>
  
<section class="products-container">
<?php
if(empty($products)){
    echo "No producs were found";
}
foreach ($currentPageProducts as $product) {
    include 'product-item.php';
}
?>
</section>
</body>
<script src="../src/scripts/filter-options.js"></script>
</html>

