<script
    src="https://kit.fontawesome.com/471de5d1b2.js"
    crossorigin="anonymous"
  ></script>
<header>

            <img class="image" src="..\src\images\Capture_d_écran_2024-03-28_203421-removebg-preview.png" alt="">
            <!-- <input class="search-bar" type="text" placeholder="Search.."> -->

            <div  class="search-container">
    <form style="display:flex;"id= "search-form" action="../public/product-list-page.php" method="GET">
        <input type="text" name="query" placeholder="Search for products...">
        <button id="search-icon" type="submit"><i class="fa-solid fa-magnifying-glass" style="color: grey" ></i></button>
    </form>
    
</div>
            <!-- <i class="fa-solid fa-magnifying-glass" style="color: grey" ></i> -->
            <ul>
                <li><a href= <?php echo "$PATH_TO_SHOP"; ?>>Shop</a></li>
                <li><a href= <?php echo "$PATH_TO_CONTACT"; ?>>Contact</a></li>
                <li><a href= <?php echo "$PATH_TO_ABOUT"; ?>>About</a></li>
            <?php if (!isset($_SESSION['user_id']) ) : ?>
                <li><a href= <?php echo "$PATH_TO_LOGIN"; ?>>Log In</a></li>
                <li><a href= <?php echo "$PATH_TO_SIGNUP"; ?>>Sign Up </a></li>
            <?php else : ?>
                <li><a><?php echo($_SESSION["user_name"]) ?></a></li>
                <li><a href= <?php echo "$PATH_TO_LOGOUT"; ?> >Logout</a></li>
            <?php endif ?>
            </ul>
</header>