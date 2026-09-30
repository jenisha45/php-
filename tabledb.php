<?php

// Database connection
$conn = mysqli_connect("localhost", "root", "", "college");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query
$sql = "SELECT * FROM students";

// Execute query
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
</head>

<body>

<h2>Student Records</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Marks</th>
    </tr>

<?php
// Fetch and display records
while ($row = mysqli_fetch_assoc($result)) {
?>

    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['marks']; ?></td>
    </tr>

<?php
}
?>

</table>

</body>
</html>

<?php
// Close connection
mysqli_close($conn);
?>
