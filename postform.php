<?php
$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
if(isset($_POST['submit'])){
    if(empty($name) || empty($email) || empty($username) || empty($pass) || empty($date) || empty($gender) || empty($phone)){
        echo "All fields are required";
    }else{
        echo "Form submitted successfully";
    }
}
//name validation
if($name.trim() == ""){
    echo "Name is required";
}else{
    if(strlen($name) <7){
        echo "Name is required";
    }
}
if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
    echo "Only letters and white space allowed in name";
}

//email validation
if($email.trim() == ""){
    echo "Email is required";       
}
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid email format";
}

//username validation
if($username.trim() == ""){
    echo "Username is required";
}

//password validation
if($pass.trim() == ""){
    echo "Password is required";
}
if(strlen($pass) < 8){
    echo "Password must be at least 8 characters long";
}

//date validation
if(empty($date)){
    echo "Date of birth is required";
}
$pattern = "/^(19|20)\d{2}\/(0[1-9]|1[0-2])\/(0[1-9]|[12][0-9]|3[01])$/";
if(!preg_match($pattern, $date)){
    echo "Invalid date format. Please use MM/DD/YYYY format.";
}

//gender validation
if($gender.check() == ""){
    echo "Gender is required";
}

//phone validation
$phoneval="/^(98|97|96)\d{8}$/";;
if($phone.trim() == ""){    
    echo "Phone number is required";
}
if(!preg_match($phoneval, $phone)){
    echo "Invalid phone number format. Please use a valid phone number.";
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation using php</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">   
        <fieldset>
            <legend>PHP Form Validation Example</legend>
            <label for="name">Full name:</label>
            <input type="text" name="name" placeholder="Enter your name"><br><br>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Enter your email"><br><br>
            <label for="username">username:</label>
            <input type="text" name="username" placeholder="Enter your username"><br><br>
            <label for="pass">Password:</label>
            <input type="password" name="pass" placeholder="Enter your password"><br><br>
            <label for="date">Date of Birth:</label>
            <input type="date" name="date"><br><br>
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="other">Other<br><br>
            <label for="phone">Phone Number:</label>
            <input type="tel" name="phone" placeholder="Enter your phone number"><br><br>
            <button value="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>

</html>