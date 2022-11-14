<?php

require 'database.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$date_of_birth = $_POST['date_of_birth'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$zipcode = $_POST['zipcode'];
$city = $_POST['city'];


$sql = "INSERT INTO users (firstname, lastname, email, password, date_of_birth, phonenumber, address, zipcode, city, role)
VALUES ('$firstname','$lastname','$email','$password','$date_of_birth','$phonenumber','$address','$zipcode','$city','regular')";
mysqli_query($conn, $sql);

echo "Inserted successfully";
mysqli_close($conn);
header('Location: admin.php');