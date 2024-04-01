<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   session_start();
   include "../src/shopping-cart/shopping-cart.php";
   $userShoppingCart = unserialize($_SESSION['user_shopping_cart']);

   //fetch user's info 
   include "../db/db-config.php";
   // Get the user ID from the session
   $userId = $_SESSION['user_id'];

   // Construct the SQL query
   $sql = "SELECT FirstName,LastName,phone,adress FROM user WHERE id = '$userId'";

   // Execute the query
   $result = $conn->query($sql);
   $user = null;
   // Check if a row is returned
   if($result->num_rows > 0) {
       // Fetch user information
       $user = $result->fetch_assoc();

      
   } else {
       echo "User not found.";
   }
   include "shopping-cart-checkout.php"; 
   
   //show the form

   include "checkout-form.php";
   
   ?>


</body>
</html>