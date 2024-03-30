<?php 
    session_start();
    class ShoppingCart {
        private $productsInCart;
        private $totalToPay;
        private $sessionId; //will store the session token

        public function __construct($productsInCart,$sessionId=null){
            $this->productsInCart = $productsInCart;
            $this->sessionId = $sessionId;
        }

        public function calculateTotalPrice() {
            foreach($this->productsInCart as $product) {
                $this->totalToPay += $product['productPrice'];
            }
        }

        public function getTotalToPay(){return $this->totalToPay;}

        public function isAvailableInStock() {
            
        }
   }
//exemple usage
//    $products = $_SESSION['products'];
//    $cart = new ShoppingCart($products);
//    $cart->calculateTotalPrice();
//    echo $cart->getTotalToPay();
 ?>