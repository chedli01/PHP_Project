<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body class="contact-body">
    
<form class="checkout-form" style="background-color:#b5aac4"action="./src/send-email.php" method="post">
<h1>Contact Us</h1>
   <div class="form-element"> <label class="label" for="name">Name:</label>
    <input class="form-input" type="text" id="name" name="name" required>
</div>
   <div class="form-element"> <label class="label" for="email">Email:</label>
    <input class="form-input" type="email" id="email" name="email" required>
</div>
   <div class="form-element"> <label class="label" for="category">Category:</label>
    <select id="category" name="category" required>
   <option value="">Select a category</option>
        <option value="Technical Issue">Technical Issue</option>
        <option value="Billing Inquiry">Billing Inquiry</option>
        <option value="General Feedback">General Feedback</option>
        <!-- Add more categories as needed -->
    </select>
    </div>     

   <div class="form-element"> <label class="label" for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>
    </div>

    <button class="signup-button" style="scale:95%" type="submit">Send Message</button>
</form>

    
</body>
</html>