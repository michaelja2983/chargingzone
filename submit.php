<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = $_POST["fname"];
    $sname = $_POST["sname"];
    $email = $_POST["email"];
    $messagearea = $_POST["messagearea"];

    // Display the submitted data
    echo "Name: " . $fname . "<br>";
    echo "SurName: " . $sname . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $messagearea . "<br>";
}
?>