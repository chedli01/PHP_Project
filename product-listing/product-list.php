<section class="product-list">
    <?php 
        include "./fetch-products/fetch-all-products.php";
        foreach($products as $product) {
            echo $product->generateProductItemHTML();
        }
     ?>
</section>