<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate form data (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($message) || empty($subject)) {
        echo "Please fill out all fields.";
    } else {
        // Email configuration
        $to = "mrisravellogu05@gmail.com";  // Replace with your email address
        //$subject = "New Contact Form Submission";
        $headers = "From: $email";

        // Compose the email message
        $email_message = "Name: $name\n";
        $email_message .= "Email: $email\n";
        $email_message .= "Message:\n$message";

        // Send email
        mail($to, $subject, $email_message, $headers);

        // Redirect after sending email
        header("Location: thank-you.html");  // Create a thank-you page and replace with its URL
        exit();
    }
}
?>