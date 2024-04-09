<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="..\style.css">
</head>

<body>
    <?php include '..\header.php'?>
    <section style="background-color: #B3AAFF; display: flex; justify-content: center; align-items: center;">
        <div style="display: flex; flex-direction: column; align-items: start; justify-content: center; height: 100vh; width:50%">
            <h1 style="font-size:50px;">Sign Up</h1>
            <form class="signup-form" action="process-signup.php" method="post"  onsubmit="return validateForm(event)">
            <div>
                    <div class="form-element">
                        <label class="label" for="FirstName">FirstName: </label>
                        <input class="form-input" type="text" id="FirstName" name="FirstName">
                    </div>
                    <div class="error-message" id="FirstNameError"></div>
                </div>
                <div>
                    <div class="form-element">
                        <label class="label" for="LastName">LastName: </label>
                        <input class="form-input" type="text" id="LastName" name="LastName">
                    </div>
                    <div class="error-message" id="LastNameError"></div>
                </div>
                <div>
                    <div class="form-element">
                        <label class="label" for="phone">Phone-Number: </label>
                        <input class="form-input" type="text" id="phone" name="phone">
                    </div>
                    <div class="error-message" id="phoneError"></div>
                </div>
                <div>
                    <div class="form-element">
                        <label class="label" for="address">Address: </label>
                        <input class="form-input" type="text" id="address" name="address">
                    </div>
                    <div class="error-message" id="addressError"></div>
                </div>
                <div>
                    <div class="form-element">
                        <label class="label" for="email">Email: </label>
                        <input class="form-input" type="email" id="email" name="email">
                    </div>
                    <div class="error-message" id="emailError"></div>
                </div>
                <div>
                    <div class="form-element">
                        <label class="label" for="password">Password: </label>
                        <input class="form-input" type="password" id="password" name="password">
                    </div>
                    <div class="error-message" id="passwordError"></div>
                </div>
                <div>
                    <div class="form-element">
                        <label class="label" for="password_confirmation">Repeat Password: </label>
                        <input class="form-input" type="password" id="password_confirmation" name="password_confirmation">
                    </div>
                    <div class="error-message" id="passwordConfirmationError"></div>
                </div>
                <button class="signup-button" type="submit">Sign Up</button>
            </form>
        </div>
        <div style="width:30%">
            <img src="..\src\images\image-removebg-preview.png"/>
        </div>    
    </section>
    <?php include '..\footer.php' ?>
</body>
<script src="..\src\scripts\validating-form.js"></script>
<script>
            const passwordInput = document.getElementById('password');
            const passwordConfirmationInput = document.getElementById('password_confirmation');
            if (passwordInput.value !== passwordConfirmationInput.value) {
                document.getElementById('passwordConfirmationError').textContent = 'Passwords do not match';
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault();
            }
</script>

</html>
