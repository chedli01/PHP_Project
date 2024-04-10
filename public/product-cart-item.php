<div class="product-cart-item">
    <img src=<?php echo "../src/images/{$product['product']['productCategory']}/{$product['product']['productImage']}"; ?>
 alt="Product Image">
 <h2 class="product-cart-name"><?php echo $product['product']['productName']; ?></h2>
 <p class="product-cart-quantity"><?php echo "x{$product['quantity']}"; ?></p> 

 <button class="add-cart-item <?php echo $product['product']['productId']; ?>">Add</button>
 <button class="remove-cart-item <?php echo $product['product']['productId']; ?>">Remove</button>
</div>