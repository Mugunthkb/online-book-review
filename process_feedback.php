<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feed = $_POST["subject"];
    $back = $_POST["feedback"];

    // You can add code here to store the feedback in a database or send it via email.

    // For this example, we'll just display the submitted data.
    echo "<h2>Thank you for your feedback!</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Subject:$feed</p>";
    echo "<p>Feedback: $back</p>";
} else {
    // If the form is accessed directly, redirect to the feedback form.
    header("Location: index.php");
}
?>
