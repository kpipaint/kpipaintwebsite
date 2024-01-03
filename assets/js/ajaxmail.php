<?php
require 'PHPMailerAutoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name']; // Change 'name' to the actual name attribute of your input field
    $email = $_POST['email']; // Change 'email' to the actual name attribute of your input field
    $message = $_POST['message']; // Change 'message' to the actual name attribute of your textarea field

    $mail = new PHPMailer;

    // ... Configure PHPMailer settings, such as SMTP server, sender email, etc.

    $mail->addAddress('contact@khalifapaintindustry.com'); // Change 'recipient@example.com' to your actual recipient email address

    $mail->Subject = 'New Form Submission';
    $mail->Body    = "Name: $name\nEmail: $email\nMessage: $message";

    if (!$mail->send()) {
        echo 0; // Email sending failed
    } else {
        echo 1; // Email sent successfully
    }
}
?>
