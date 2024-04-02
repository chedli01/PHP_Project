<?php 
    include_once "../shopping-cart/shopping-cart.php";
    include_once "../../db/db-config.php";
    session_start();
    if(isset($_SESSION['user_shopping_cart'])){
    $shoppingCart = unserialize($_SESSION['user_shopping_cart']);
    
    //handle stock availability 
    if($shoppingCart->isAvailableInStock()){
        
        //place order in database 
        $customerId = $shoppingCart->getCustomerId();
        $orderDate = date("d-m-y");
        $totalAmount = $shoppingCart->getTotalToPay();
        $shippingAddress = $_POST["shippingAddress"];

        
        
        $sql = "INSERT INTO orders (customerId, orderDate, totalAmount, shippingAddress) VALUES ('$customerId', '$orderDate', '$totalAmount', '$shippingAddress')";

        // Execute the SQL query
        if ($conn->query($sql) === TRUE) {
            // Order inserted successfully
            $orderId = $conn->insert_id; // Retrieve the orderId
            echo "Order placed successfully! Order ID: $orderId";
        } else {
            // Error executing the SQL query
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        foreach($shoppingCart->getProductsInCart() as $product){
            $productId = $product['product']['productId'];
            $quantity = $product['quantity'];
            $price = $product['product']['productPrice']*$quantity;
            $sql = "INSERT INTO orderDetails (orderId, productId, quantity, price) VALUES ('$orderId', '$productId', '$quantity', '$price')";
            if ($conn->query($sql) === TRUE) {
                // Order inserted successfully
                echo "Order detail  successfully placed!";
            } else {
                // Error executing the SQL query
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Close connection
        $conn->close();
        //handle the appropriate stock changes (handled via a trigger in the database)
        //clear shopping cart
        unset($_SESSION['user_shopping_cart']);
    }
    else {
        echo "no stock available";
    }
    }
 ?>


