<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Set email parameters
    $to = "azizgul.orozalieval@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission to GEDC from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thank you, $name! Your message has been sent.</h2>";
    } else {
        echo "<h2>Sorry, there was an error sending your message. Please try again later.</h2>";
    }
} else {
    echo "Form not submitted correctly.";
}
?>
