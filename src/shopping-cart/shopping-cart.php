<?php 
    class ShoppingCart {
        private $productsInCart;
        private $totalToPay=0;
        private $customerId; 

        public function __construct($productsInCart=array(),$sessionId=null){
            $this->productsInCart = $productsInCart;
            $this->customerId = $_SESSION["user_id"];
        }
        public function __toString(){
            print_r($this->productsInCart);
            return "$this->customerId,$this->totalToPay";
        }
        public function calculateTotalPrice() {
            foreach($this->productsInCart as $product) {
                $this->totalToPay += $product["product"]["productPrice"]*$product["quantity"];
            }
        }

        public function getTotalToPay(){
            $this->calculateTotalPrice();
            return $this->totalToPay;}
        public function getTotalItems() {
            $numberOfItems = 0;
            foreach($this->productsInCart as $product){
                $numberOfItems += $product["quantity"];
            }
            return $numberOfItems;
        }
        public function getProductsInCart(){return $this->productsInCart;}
        public function addItem($cartProduct){
            $this->productsInCart[] = $cartProduct;
        }
        public function isAvailableInStock() {
            //todo
        }
   }
//exemple usage
//    $products = $_SESSION['products'];
//    $cart = new ShoppingCart($products);
//    $cart->calculateTotalPrice();
//    echo $cart->getTotalToPay();
 ?>