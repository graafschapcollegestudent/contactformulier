<?php

// gegevens ophalen uit formulier
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Email settings
$to = "jouwstudentmail@graafschapcollege.nl"; // jouw GC mail
$subject = "New Contact Form Submission";
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email";

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}

?>