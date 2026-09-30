<?php
$servername = "localhost";
$user = "root";
$password = "";
$database = "restaurant_db";

$conn = new mysqli($servername, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch food records
$sql = "SELECT name, price, ingredient, remarks FROM foods";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food Menu</title>

    <style>
        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        h2 {
            text-align: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>

<h2>Restaurant Food Menu</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Ingredient</th>
        <th>Remarks</th>
    </tr>

    <?php
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["price"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["ingredient"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["remarks"]) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No food records found.</td></tr>";
    }

    $conn->close();
    ?>

</table>

</body>
</html>
