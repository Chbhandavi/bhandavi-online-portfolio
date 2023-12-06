<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "chbhandavi@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $headers = "From: $email";

    // Use mail() function to send the email
    mail($to, $subject, $message, $headers);

    // Optionally, you can redirect the user to a thank-you page
    header("Location: thank-you.html");
    exit;
} else {
    // Handle other HTTP methods or display an error message
    header("HTTP/1.1 405 Method Not Allowed");
    echo "Method Not Allowed";
}
?>
