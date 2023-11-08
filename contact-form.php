<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $representative = $_POST['representative'];
    $message = $_POST['message'];

    $to = 'shahzaibabidsaeed@gmail.com'; // your email address
    $subject = 'New Contact Form Submission';
    $body = "You have received a new message from the contact form.\n\n";
    $body .= "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Representative: " . $representative . "\n";
    $body .= "Message: " . $message;

    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
        echo "Message successfully sent";
    } else {
        echo "Message could not be sent";
    }
}
?>
