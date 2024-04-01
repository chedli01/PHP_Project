<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="..\style.css">
</head>
<body >
    <?php include '..\header.php>'?>
    <section style="background-color: #B3AAFF ; display: flex; justify-content: center; align-items: center;">
    <div style=" display: flex; flex-direction: column; align-items: start; justify-content: center; height: 100vh; width:50%">
    <h1 style="font-size:50px    ;">Sign Up</h1>
    <form class="signup-form"  action="process-signup.php" method="post" novalidate>
        <div class="form-element">
            <label class="label" for="FirstName">FirstName: </label>
            <div>
            <input class="form-input" type="text" id="FirstName" name="FirstName">
            <div class="error-message" id="FirstNameError"></div>
        </div>
        </div>
        <div class="form-element">
            <label class="label" for="LastName">LastName: </label>
            <div><input class="form-input" type="text" id="LastName" name="LastName">
            <div class="error-message" id="LastNameError"></div>
        </div>
        </div>
        <div class="form-element">
            <label class="label" for="phone">Phone-Number: </label>
            <div>
            <input class="form-input" type="text" id="phone" name="phone">
            <div class="error-message" id="phoneError"></div>
        </div>
        </div>
        <div class="form-element">
            <label class="label" for="adress">Address: </label>
            <div>
            <input class="form-input" type="text" id="address" name="address">
            <div class="error-message" id="addressError"></div>
        </div>
        </div>
        <div class="form-element">
            <label class="label" for="email">Email: </label>
            <div>
            <input class="form-input" type="email" id="email" name="email">
            <div class="error-message" id="emailError"></div>
            </div>
        </div>
        <div class="form-element">
            <label class="label" for="password">Password: </label>
            <div>
            <input class="form-input" type="password" id="password" name="password">
            <div class="error-message" id="passwordError"></div>
        </div>
        </div>
        <div class="form-element" >
            <label class="label" for="password_confirmation">Repeat Password: </label>
            <div>
            <input class="form-input" type="password" id="password_confirmation" name="password_confirmation">
            <div class="error-message" id="passwordConfirmationError"></div>
        </div>
        </div>
        <button class="signup-button" type="submit">Sign Up</button>
    </form>
</div>  
    <div style="width:30%">
    <img  src="..\src\images\image-removebg-preview.png"/>
    </div>    

    </section>
    <?php include '..\footer.php' ?>
</body>
<script src="..\src\scripts\form-script.js">
</script>
</html>