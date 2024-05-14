<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'rasmodev@gmail.com'; // Update this with your email address
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo 'Message sent successfully!'; // Optional: Display a success message
    } else {
        echo 'Oops! Something went wrong.'; // Optional: Display an error message
    }
} else {
    echo 'Invalid request!';
}
?>
