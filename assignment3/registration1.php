<?php

$username = "";
$email = "";
$gender = "";
$mobile = "";
$country = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Username validation
    $username = trim($_POST["username"]);

    if (empty($username)) {
        $errors["username"] = "* Username is required";
    } elseif (!preg_match("/^[A-Za-z0-9 ]+$/", $username)) {
        $errors["username"] = "* Username should contain only letters, numbers and spaces";
    }


    // Email validation
    $email = trim($_POST["email"]);

    if (empty($email)) {
        $errors["email"] = "* Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "* Invalid email format";
    }


    // Gender validation
    if (empty($_POST["gender"])) {
        $errors["gender"] = "* Please select your gender";
    } else {
        $gender = $_POST["gender"];
    }


    // Mobile number validation
    $mobile = trim($_POST["mobile"]);

    if (empty($mobile)) {
        $errors["mobile"] = "* Mobile number is required";
    } elseif (!preg_match("/^\+?[0-9]+$/", $mobile)) {
        $errors["mobile"] = "* Mobile number should contain only numbers and an optional + symbol";
    }


    // Country validation
    if (empty($_POST["country"])) {
        $errors["country"] = "* Please select your country";
    } else {
        $country = $_POST["country"];
    }


    // Password validation
    $password = $_POST["password"];

    if (empty($password)) {
        $errors["password"] = "* Password is required";
    } elseif (strlen($password) < 8) {
        $errors["password"] = "* Password must be at least 8 characters long";
    }


    // Confirm password validation
    $confirm_password = $_POST["confirm_password"];

    if (empty($confirm_password)) {
        $errors["confirm_password"] = "* Confirm password is required";
    } elseif ($password !== $confirm_password) {
        $errors["confirm_password"] = "* Passwords do not match";
    }


    // Terms and conditions
    if (!isset($_POST["terms"])) {
        $errors["terms"] = "* You must agree to the terms and conditions";
    }


    // If there are no errors
    if (empty($errors)) {
        echo "<h2>Registration Successful!</h2>";

        echo "Username: " . htmlspecialchars($username) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Gender: " . htmlspecialchars($gender) . "<br>";
        echo "Mobile No: " . htmlspecialchars($mobile) . "<br>";
        echo "Country: " . htmlspecialchars($country) . "<br>";

        echo "Password: " . htmlspecialchars($password) . "<br>";
        echo "Confirm Password: " . htmlspecialchars($confirm_password) . "<br>";

        echo "Terms and Conditions: Agreed";

        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration Form</title>

    <style>
        .error {
            color: red;
        }
    </style>

</head>

<body>

    <h2>Registration Form</h2>

    <form action="registration.php" method="post">

        <!-- Username -->
        Username:
        <input type="text" name="username"
               value="<?php echo htmlspecialchars($username); ?>">

        <?php
        if (isset($errors["username"])) {
            echo "<span class='error'>" . $errors["username"] . "</span>";
        }
        ?>

        <br><br>


        <!-- Email -->
        Email Address:
        <input type="text" name="email"
               value="<?php echo htmlspecialchars($email); ?>">

        <?php
        if (isset($errors["email"])) {
            echo "<span class='error'>" . $errors["email"] . "</span>";
        }
        ?>

        <br><br>


        <!-- Gender -->
        Gender:

        <input type="radio" name="gender" value="Male"
        <?php if ($gender == "Male") echo "checked"; ?>>
        Male

        <input type="radio" name="gender" value="Female"
        <?php if ($gender == "Female") echo "checked"; ?>>
        Female

        <input type="radio" name="gender" value="Other"
        <?php if ($gender == "Other") echo "checked"; ?>>
        Other

        <?php
        if (isset($errors["gender"])) {
            echo "<span class='error'>" . $errors["gender"] . "</span>";
        }
        ?>

        <br><br>


        <!-- Mobile -->
        Mobile No:
        <input type="text" name="mobile"
               value="<?php echo htmlspecialchars($mobile); ?>">

        <?php
        if (isset($errors["mobile"])) {
            echo "<span class='error'>" . $errors["mobile"] . "</span>";
        }
        ?>

        <br><br>


        <!-- Country -->
        Country:

        <select name="country">

            <option value="">--Select Country--</option>

            <option value="India"
            <?php if ($country == "India") echo "selected"; ?>>
                India
            </option>

            <option value="USA"
            <?php if ($country == "USA") echo "selected"; ?>>
                USA
            </option>

            <option value="UK"
            <?php if ($country == "UK") echo "selected"; ?>>
                UK
            </option>

            <option value="Canada"
            <?php if ($country == "Canada") echo "selected"; ?>>
                Canada
            </option>

            <option value="Australia"
            <?php if ($country == "Australia") echo "selected"; ?>>
                Australia
            </option>

        </select>

        <?php
        if (isset($errors["country"])) {
            echo "<span class='error'>" . $errors["country"] . "</span>";
        }
        ?>

        <br><br>


        <!-- Password -->
        Password:
        <input type="password" name="password">

        <?php
        if (isset($errors["password"])) {
            echo "<span class='error'>" . $errors["password"] . "</span>";
        }
        ?>

        <br><br>


        <!-- Confirm Password -->
        Confirm Password:
        <input type="password" name="confirm_password">

        <?php
        if (isset($errors["confirm_password"])) {
            echo "<span class='error'>" . $errors["confirm_password"] . "</span>";
        }
        ?>

        <br><br>


        <!-- Terms -->
        <input type="checkbox" name="terms" value="Agreed"
        <?php if (isset($_POST["terms"])) echo "checked"; ?>>

        I agree to the terms and condition

        <?php
        if (isset($errors["terms"])) {
            echo "<span class='error'>" . $errors["terms"] . "</span>";
        }
        ?>

        <br><br>


        <input type="submit" value="Submit">

    </form>

</body>

</html>