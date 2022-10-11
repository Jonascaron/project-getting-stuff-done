<?php

require 'database.php';

$sql = "INSERT INTO users (firstname, lastname, email, password, date_of_birth, phonenumber, address, zipcode, city, role)
VALUES ('" . $_POST['firstname'] . "','" . $_POST['lastname'] . "','" . $_POST['phonenumber'] . "','" . $_POST['email'] . "','" . $_POST['password'] . "','regular')";

// Voer de INSERT INTO STATEMENT uit
mysqli_query($conn, $sql);

echo "Inserted successfully";
mysqli_close($conn); // Sluit de database verbinding
header('Location: start.php');
