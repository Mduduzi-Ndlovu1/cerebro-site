<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $description = $_POST["description"];

    // Create the email message
    $to = "Mduduzindlovu02@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $message = "First Name: $first_name\n";
    $message .= "Last Name: $last_name\n";
    $message .= "Email: $email\n";
    $message .= "Description:\n$description";

    // Send the email
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>
