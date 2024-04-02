<div class="shopping-cart">
            <!-- cart products section
             !-->
        <div class="cart-items">
            <?php 
                $productsInCart =$userShoppingCart->getProductsInCart();
                foreach( $productsInCart as $product) {
                    include "product-cart-item.php";
                }
             ?>
             <style>.cart-items img {width:50px;}</style>
        </div>
        <div class="cart-summary">
            <!-- Summary of the shopping cart -->
            <h2>Cart Summary</h2>
            <p class="total-items summary">Total Items: <?php echo $userShoppingCart->getTotalItems(); ?></p>
            <p class="total-price summary">Total Price: <?php echo $userShoppingCart->getTotalToPay(); ?></p>
        </div>
</div>