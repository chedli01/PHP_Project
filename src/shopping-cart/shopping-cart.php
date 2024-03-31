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
            $this->totalToPay = 0;
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
        public function removeZeroQuantityProducts() {
            // Filter out products with quantity 0
            $this->productsInCart = array_filter($this->productsInCart, function($cartProduct) {
                return $cartProduct['quantity'] > 0;
            });
        }
        public function getProductsInCart(){return $this->productsInCart;}
        public function getCustomerId(){return $this->customerId;}
        public function addItem($cartProduct) {
            $productIdToAdd = $cartProduct['product']['productId'];
            $productExists = false;
        
            // Check if the product already exists in the cart
            foreach ($this->productsInCart as &$existingProduct) {
                if ($existingProduct['product']['productId'] == $productIdToAdd) {
                    // Update the quantity of the existing product
                    $existingProduct['quantity'] += $cartProduct['quantity'];
                    $productExists = true;
                    break;
                }
            }
        
            // If the product doesn't exist in the cart, add it
            if (!$productExists) {
                $this->productsInCart[] = $cartProduct;
            }
        }
        
        public function isAvailableInStock() {
            foreach ($this->productsInCart as $cartProduct) {
                $quantityInStock = $cartProduct['product']['quantityInStock'];
                if( $quantityInStock < $cartProduct['quantity']){
                    return false;
                }
            }
            return true; // All products are available in stock
        }

        function incrementQuantity($productId,$isDecrement = false){
                 $productId = (int) explode(" ",$_GET['productId'])[1];
                foreach ($this->productsInCart as &$cartProduct) {
                    if($cartProduct['product']['productId']==$productId) {
                        if($isDecrement){
                            if($cartProduct['quantity'] > 0){
                            $cartProduct['quantity'] -- ;
                            $this->removeZeroQuantityProducts();
                            }
                        }
                        else{
                            $cartProduct['quantity'] ++ ;
                        }
                        return $cartProduct['quantity'];
                        break;
                    }
                    }
                    
                }
            
                
                
   }
//exemple usage
//    $products = $_SESSION['products'];
//    $cart = new ShoppingCart($products);
//    $cart->calculateTotalPrice();
//    echo $cart->getTotalToPay();
 ?>