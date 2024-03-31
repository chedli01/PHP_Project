
<!-- product_item.php -->

<form method="post" action="../src/shopping-cart/add-to-cart.php" class="product-item">
    <input type="hidden" name="product-index" value=<?php echo $index;?>>
    <div class="product-image">
    <img src=<?php echo "../src/images/{$product['productCategory']}/{$product['productImage']}"; ?>
 alt="Product Image">
    </div>
    <div class="product-details">
        <h2 class="product-name"><?php echo $product['productName']; ?></h2>
        <p class="product-description"><?php echo $product['productDescription']; ?></p>
        <p class="product-price"><?php echo $product['productPrice']; ?></p>
    </div>
    
    <button  class="add-to-cart" type="submit">Add to cart</button>
    
</form>