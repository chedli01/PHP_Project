<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $category = $_POST["category"];
        $message = wordwrap($message, 75);
        $message .= "\nSent from $name / $email";

        // Define Gmail SMTP config 
        include "email-auth.php";
        define('MAILHOST', "smtp.gmail.com");
        require "../vendor/autoload.php";
        
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = MAILHOST;
        $mail->SMTPSecure = PHPMAiler::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->Username  = USERNAME;
        $mail->Password = PASSWORD;
        $mail->setFrom($email, $name);
        $mail->addAddress(USERNAME);
        $mail->Subject = $category;
        $mail->Body = $message;

        // Send email
        if ($mail->send()) {
            echo '<script>alert("Email sent");</script>'; // Display JavaScript alert
        } else {
            echo '<script>alert("Error: Unable to send email.");</script>'; // Display JavaScript alert for error
        }
    }
?>
