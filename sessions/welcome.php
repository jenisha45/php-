<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: ../sessions.php");
    exit();
}
?>

<html>
<body>

<h2>Welcome</h2>

<?php
echo "Welcome, " .($_SESSION["username"]);
?>

<br><br>

<a href="logout.php">Logout</a>

</body>
</html>
