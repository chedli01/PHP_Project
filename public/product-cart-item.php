<div class="product-cart-item" style="margin:25px">
    <img src=<?php echo "../src/images/{$product['product']['productCategory']}/{$product['product']['productImage']}"; ?>
 alt="Product Image">
 <h2 class="product-cart-name"><?php echo $product['product']['productName']; ?></h2>
 <p class="product-cart-quantity"><?php echo "x{$product['quantity']}"; ?></p> 

 <button class="sidebar-button <?php echo $product['product']['productId']; ?>">Add</button>
 <button class="sidebar-button <?php echo $product['product']['productId']; ?>">Remove</button>
</div>
