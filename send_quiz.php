<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if all necessary fields are set
    if (isset($_POST['class']) && isset($_POST['quiz_url'])) {
        $class = $_POST['class'];
        $quizUrl = $_POST['quiz_url'];

        // You can process the quiz data here
        // For example, send an email or save to a database

        // Send confirmation response
        echo "Quiz has been sent successfully to $class. <br>";
        echo "Quiz URL: <a href='$quizUrl' target='_blank'>$quizUrl</a>";

        // Additional processing logic (e.g., storing responses or sending notifications) goes here
    } else {
        echo "Missing required fields!";
    }
} else {
    // Handle other request methods if needed
    header('HTTP/1.1 405 Method Not Allowed');
    echo "Method Not Allowed. Please use POST method.";
    exit;
}
?>
