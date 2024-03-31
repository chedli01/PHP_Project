<?php 
    session_start();
    include_once "../shopping-cart/shopping-cart.php";
    $cart = unserialize($_SESSION["user_shopping_cart"]);
    if($_GET['isAdding']=='false'){
        echo $cart->incrementQuantity($_GET['productId'], true) . ' ' . $cart->getTotalToPay() . ' ' . $cart->getTotalItems();

    }
    else{
        echo $cart->incrementQuantity($_GET['productId']) . ' ' . $cart->getTotalToPay() . ' ' . $cart->getTotalItems();

    }
    $_SESSION["user_shopping_cart"]=serialize($cart);
    
    
 ?>