<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['email'];
    $subject = "Check out this quiz!";
    $message = "Hey, check out this interactive quiz: " . $_POST['quiz_url'];
    $headers = "From: your_email@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Quiz sent successfully!";
    } else {
        echo "Failed to send.";
    }
}
?>
