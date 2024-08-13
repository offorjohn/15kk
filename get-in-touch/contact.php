<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Set email parameters
    $to = "audit@melrosecunion.com"; // Replace with your email address
    $subject = "Contact Form Submission: $subject";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: webmaster@melrosecunion.com";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Thank you for your message. We will get back to you soon.</p>";
    } else {
        echo "<p>There was a problem sending your message. Please try again.</p>";
    }
}
?>
