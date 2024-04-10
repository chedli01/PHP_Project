<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="../src/styles/global-styles.css">
    <link rel="stylesheet" href="../src/styles/filter-options.css">
    <link rel="stylesheet" href="../src/styles/product-card.css">
    <link rel="stylesheet" href="../src/styles/search.css">
    <link rel="stylesheet" href="../style.css">
</head>
<script
    src="https://kit.fontawesome.com/471de5d1b2.js"
    crossorigin="anonymous"
  ></script>
<body class=home-body>
    <?php 
     session_start();
     $PATH_TO_SHOP = "./public/product-list-page.php";
     $PATH_TO_LOGIN = "./Signup/login.php";
     $PATH_TO_LOGOUT = "./Signup/logout.php";
     $PATH_TO_SIGNUP = "./Signup/signup.php";
     $PATH_TO_ABOUT = "#";
     $PATH_TO_CONTACT = "contact.php";
    include 'header.php';
    echo "test"; ?>
    <section  style="display: flex; flex-direction: column ; align-items: start ; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding:30px; ">
    <h1 style="font-size:60px ; color:white ; margin-bottom: 0px; ">About us</h1>
    <div style="display: flex; justify-content: center ; gap: 20px"><p style="color: white ; font-size:30px; width: 50%"> Welcome to TechHive, your go-to destination for the latest and greatest in technology!

    <br/>
<br/>
    At TechHive, we're passionate about all things tech, and we're dedicated to providing our customers with an unparalleled shopping experience. Whether you're a gadget enthusiast, a tech aficionado, or simply looking to upgrade your digital lifestyle, we've got you covered.
    

</p>
    <img style="scale:100%; transform: translateY(-150px)" src="..\src\images\image-removebg-preview (2).png" alt="">
</div>
<h1 style="font-size:60px ; color:white ; margin-bottom: 0px; ">Our Mission</h1>
    <p style="color: white ; font-size :25px; padding: 0px 50px" >
   


Our mission is simple: to offer a curated selection of top-quality electronic devices, gadgets, and accessories at competitive prices. From smartphones and tablets to laptops, wearables, and beyond, we handpick every product in our inventory to ensure that it meets our high standards of quality, performance, and innovation.
<br/>
<br/>
But we're more than just an online store – we're a community of tech enthusiasts who share a love for cutting-edge technology and innovation. Our team is made up of dedicated professionals who are passionate about helping you find the perfect tech solutions to suit your needs.
<br/>
<br/>
At TechHive, we believe in providing exceptional customer service and support every step of the way. Whether you have questions about a product, need assistance with your order, or simply want to chat about the latest tech trends, our friendly and knowledgeable team is here to help.
<br/>
<br/>
Thank you for choosing TechHive as your trusted source for all things tech. We look forward to serving you and helping you discover the endless possibilities of the digital world!
<br/>
<br/>   
    </p>
    </section>
    <?php include 'footer.php' ?>
</body>
</html>