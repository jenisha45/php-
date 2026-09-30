<?php

$conn = mysqli_connect("localhost", "root", "", "my_database");

if (!$conn) {
    die("Connection failed");
}

echo "Connected successfully";

?>
