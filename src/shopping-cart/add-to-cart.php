<?php 
    include_once "shopping-cart.php";
    session_start();
    function addToCart() {
        // LOOK FOR THE PRODUCT ADDED TO THE CART
        $productAdded = $_POST['product-index'];
        $products = $_SESSION['products']; 
        // retreive users shopping card
        $shoppingCard = unserialize($_SESSION['user_shopping_cart']);
        //add the item to the card with quantity 1
        $shoppingCard->addItem(array('product'=>$products[$productAdded],'quantity'=>1));
        $_SESSION['user_shopping_cart'] = serialize($shoppingCard);

    }
    addToCart();
 ?>

