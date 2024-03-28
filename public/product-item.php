
<!-- product_item.php -->

<div class="product-item">
    <div class="product-image">
    <img src=<?php echo "../src/images/{$product['productCategory']}/{$product['productImage']}"; ?>
 alt="Product Image">
    </div>
    <div class="product-details">
        <h2 class="product-name"><?php echo $product['productName']; ?></h2>
        <p class="product-description"><?php echo $product['productDescription']; ?></p>
        <p class="product-price"><?php echo $product['productPrice']; ?></p>
    </div>
</div>