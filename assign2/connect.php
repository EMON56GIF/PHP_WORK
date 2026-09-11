<?php

$servername="127.0.0.1";
$username="root";
$password="";
$dbname="catlovers";

$con= new mysqli($servername,$username,$password,$dbname);

if ($con){

$username=$_POST["fullname"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];



echo "Succesful connection record inserted";
}
else{
    die("some error:".mysqli_error($con));
}

$sql = "INSERT INTO registration (username, gender, dob, email, mobile)
VALUES ('$username', '$gender', '$dob', '$email', '$mobile')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>











