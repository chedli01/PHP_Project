<?php
session_start();
if(isset($_SESSION['user_id'])){
    header("Location:../public/product-list-page.php");
}

$error_message = '';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $mysqli=require "../db/db-config.php";
    $sql=sprintf("SELECT * FROM user 
          WHERE email='%s'",$mysqli->real_escape_string($_POST["email"]));
    $result=$mysqli->query($sql);
    $user=$result->fetch_assoc();

    if($user){
        if($_POST["password"]==$user["password_hash"]){
            session_start();
            session_regenerate_id();
            $_SESSION["user_id"]=$user["id"];
            $_SESSION["user_name"] = $user["FirstName"];
            header("Location:../public/product-list-page.php");
            exit;
        }
        else{
           $error_message = 'Invalid email or password. Please try again.';
        }
    }
    else{
        $error_message = 'Invalid email or password. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="..\style.css">
    <script src="..\src\scripts\validating-form.js"></script>
    <link rel="stylesheet" href="../src/styles/global-styles.css">
    <link rel="stylesheet" href="../src/styles/filter-options.css">
    <link rel="stylesheet" href="../src/styles/product-card.css">
    <link rel="stylesheet" href="../src/styles/search.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php
    $PATH_TO_SHOP = "../public/product-list-page.php";
    $PATH_TO_LOGIN = "#";
    $PATH_TO_LOGOUT = "logout.php";
    $PATH_TO_SIGNUP = "signup.php";
    $PATH_TO_ABOUT = "../about.php";
    $PATH_TO_CONTACT = "../contact.php";
     include '..\header.php'?>
    <section style="background-color:#883DB0;display: flex; justify-content: center; align-items: center; " >
        <div>
            <h1 style="font-size:50px" >Welcome Back</h1>
            <form method="post" >
                <div>
                    <div class="form-element">
                        <label class="label" for="email">Email : </label>
                        <input class="form-input" type="text" id="email" name="email">
                    </div>
                    <p class="error-message" id="emailError"></p>
                </div>
                <div>
                    <div class="form-element">
                        <label class="label" for="password">Password : </label>
                        <input class="form-input" type="password" id="password" name="password">
                    </div>
                    <p class="error-message" id="passwordError"></p>
                </div>
                <button class="signup-button" >Login</button>
                <p id="errorMessage" class="error-message"></p>
            </form>
        </div>
        <img style="scale:90%" src="..\src\images\Capture_d_écran_2024-04-01_000843-removebg-preview.png"/>    
    </section>
    <?php include '..\footer.php' ?>
</body>

</html>
