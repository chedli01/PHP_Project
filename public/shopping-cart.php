<div class="shopping-cart">
<div class="shopping-cart-items">
            <!-- cart products section
             !-->
        <div class="cart-items">

        </div>
        <div class="cart-summary">
            <!-- Summary of the shopping cart -->
            <h2>Cart Summary</h2>
            <p>Total Items: <?php echo $userShoppingCart->getTotalItems(); ?></p>
            <p>Total Price: <?php echo $userShoppingCart->getTotalToPay(); ?></p>
            <button>Checkout</button>
        </div>
</div>