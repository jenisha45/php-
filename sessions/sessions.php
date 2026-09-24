<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];

    $_SESSION["username"] = $username;

    header("Location: ../welcome.php");
    exit();

}
?>

<html>
<body>

<h2>Login Form</h2>

<form method="post">
    Username:
    <input type="text" name="username">

    <input type="submit" value="Login">
</form>

</body>
</html>
