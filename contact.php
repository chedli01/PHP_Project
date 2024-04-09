<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="./src/send-email.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="category">Category:</label>
    <select id="category" name="category" required>
        <option value="">Select a category</option>
        <option value="Technical Issue">Technical Issue</option>
        <option value="Billing Inquiry">Billing Inquiry</option>
        <option value="General Feedback">General Feedback</option>
        <!-- Add more categories as needed -->
    </select>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <button type="submit">Send Message</button>
</form>

    
</body>
</html>