<?php

require_once "connect.php";

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM registration
        WHERE username = '$username'
        AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    header("Location: home.php");
    exit();

} else {

    header("Location: login.php");
    exit();

}

?>