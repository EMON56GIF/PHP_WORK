<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>

<body>

<h2>User Registration</h2>

<form method="post">

    Full Name:
    <input type="text" name="name">
    <br><br>

    Date of Birth:
    <input type="date" name="dob">
    <br><br>

    Email ID:
    <input type="email" name="email">
    <br><br>

    Mobile:
    <input type="text" name="mobile">
    <br><br>

    <input type="checkbox" name="terms">
    I agree to the terms and conditions

    <br><br>

    <input type="submit" name="register" value="Register">

</form>

<?php

if (isset($_POST['register'])) {

    $name = trim($_POST['name']);
    $dob = $_POST['dob'];
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);

    $errors = array();

    // Full name must contain two words
    $nameParts = preg_split('/\s+/', $name);

    if (count($nameParts) < 2) {
        $errors[] = "Full name must contain at least two words.";
    }

    // Check date of birth
    if (empty($dob)) {

        $errors[] = "Date of birth is required.";

    }
    else {

        $birthDate = new DateTime($dob);
        $today = new DateTime();

        $age = $today->diff($birthDate)->y;

        if ($age < 18) {
            $errors[] = "You must be at least 18 years old.";
        }
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }

    // Validate mobile number
    if (!preg_match('/^[0-9]{10}$/', $mobile)) {
        $errors[] = "Mobile number must contain exactly 10 digits.";
    }

    // Check terms and conditions
    if (!isset($_POST['terms'])) {
        $errors[] = "You must agree to the terms and conditions.";
    }

    // Display result
    if (empty($errors)) {

        echo "<h3>Successful Registration</h3>";

    }
    else {

        echo "<h3>Registration Failed</h3>";

        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

?>

</body>
</html>     