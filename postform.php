<?php

if (isset($_POST['submit'])) {

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $pass = trim($_POST['pass'] ?? '');
    $date = trim($_POST['date'] ?? '');
    $gender = $_POST['gender'] ?? '';
    $phone = trim($_POST['phone'] ?? '');

    if (
        empty($name) ||
        empty($email) ||
        empty($username) ||
        empty($pass) ||
        empty($date) ||
        empty($gender) ||
        empty($phone)
    ) {
        echo "All fields are required.<br>";
    } else {

       
        if (strlen($name) < 7) {
            echo "Name must be at least 7 characters long.<br>";
        }

        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            echo "Only letters and white space are allowed in name.<br>";
        }

     
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.<br>";
        }

     
        if (strlen($username) < 4) {
            echo "Username must be at least 4 characters long.<br>";
        }

 
        if (strlen($pass) < 8) {
            echo "Password must be at least 8 characters long.<br>";
        }

        $pattern = "/^(19|20)\d{2}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/";

        if (!preg_match($pattern, $date)) {
            echo "Invalid date format.<br>";
        }

        
        if (empty($gender)) {
            echo "Gender is required.<br>";
        }

    
        $phoneval = "/^(98|97|96)\d{8}$/";

        if (!preg_match($phoneval, $phone)) {
            echo "Invalid phone number format.<br>";
        }

        echo "Form submitted successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Using PHP</title>
</head>

<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

    <fieldset>

        <legend>PHP Form Validation Example</legend>

        <label for="name">Full name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" placeholder="Enter your username">
        <br><br>

        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass" placeholder="Enter your password">
        <br><br>

        <label for="date">Date of Birth:</label>
        <input type="date" name="date" id="date">
        <br><br>

        <label>Gender:</label>

        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other

        <br><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" name="phone" id="phone" placeholder="Enter your phone number">
        <br><br>

        <button type="submit" name="submit">Submit</button>

    </fieldset>

</form>

</body>
</html>
