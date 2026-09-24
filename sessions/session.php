<?php

session_start();

// Store data in session
$_SESSION["username"] = "John";
$_SESSION["email"] = "john@example.com";

echo "Username: " . $_SESSION["username"] . "<br>";
echo "Email: " . $_SESSION["email"];

?>
