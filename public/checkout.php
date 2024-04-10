<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/styles/global-styles.css">
    <link rel="stylesheet" href="../src/styles/filter-options.css">
    <link rel="stylesheet" href="../src/styles/product-card.css">
    <link rel="stylesheet" href="../src/styles/search.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="product-list-body" style="height:100vh;  display:flex; flex-direction:column; justify-content:space-between">
   
   <?php 
   session_start();
   ;
   if(isset($_SESSION['user_id'])){
   
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
    $PATH_TO_SHOP = "product-list-page.php";
    $PATH_TO_LOGIN = "../Signup/login.php";
    $PATH_TO_LOGOUT = "../Signup/logout.php";
    $PATH_TO_SIGNUP = "../Signup/signup.php";
    $PATH_TO_ABOUT = "../about.php";
    $PATH_TO_CONTACT = "#";
    include "..\header.php" ;
    ?>

    <div class="checkout-container" style="display: flex; gap:50px">
        <?php include "shopping-cart-checkout.php"; ?>
        <?php include "checkout-form.php"; ?>
    </div>

<?php
}
else{
    echo "no user logged in please log in"; //error page no user is logged in 
}
   ?>

<?php include '..\footer.php' ?>
</body>

</html>