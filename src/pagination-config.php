<?php 
    $productsPerPage = 5;//maximum number of products that can be displayed in a single page
    $totalPages = ceil(count($products) / $productsPerPage);
    // Determine current page number from URL parameter (default to page 1)
    $pageNumber = isset($_GET['page']) ? intval($_GET['page']) : 1;

        // Ensure page number is within valid range
    $pageNumber = max(min($totalPages, $pageNumber), 1);

    // Calculate start and end indices for current page
    $startIndex = ($pageNumber - 1) * $productsPerPage;
    $endIndex = min($startIndex + $productsPerPage - 1, count($products) - 1);

    // Extract products for current page
    $currentPageProducts = array_slice($products, $startIndex, $productsPerPage);
?>