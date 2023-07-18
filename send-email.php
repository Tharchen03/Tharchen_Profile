<?php
// send-email.php

require 'vendor/autoload.php';  // Include PHPMailer library

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    // Configure SMTP settings for Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sherabten098@gmail.com@gmail.com';  // Replace with your Gmail email address
    $mail->Password = 'sherab_03';  // Replace with your Gmail password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Set email parameters
    $mail->setFrom($email, $name);
    $mail->addAddress('cocodon098@gmail.com@example.com');  // Replace with the recipient's email address
    $mail->Subject = $subject;
    $mail->Body = $message;

    // Send the email
    $mail->send();

    echo 'Your message has been sent successfully.';
} catch (Exception $e) {
    echo 'Sorry, there was an error sending your message. Error: ' . $mail->ErrorInfo;
}
?>
