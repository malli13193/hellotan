<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    
    // Here you can add code to store the name in a database or a file
    // For demonstration purposes, we will just echo the name

    echo "Name received: " . $name;
} else {
    echo "Invalid request method.";
}
?>
