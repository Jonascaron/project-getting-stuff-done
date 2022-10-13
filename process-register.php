<?php

require 'database.php';

$sql = "INSERT INTO users (firstname, lastname, email, password, date_of_birth, phonenumber, address, zipcode, city, role)
VALUES ('" . $_POST['firstname'] . "','" . $_POST['lastname'] . "','" . $_POST['email'] . "','" . $_POST['password'] . "','" . $_POST['date_of_birth'] . "','" . $_POST['phonenumber'] . "','" . $_POST['address'] . "','" . $_POST['zipcode'] . "','" . $_POST['city'] . "','regular')";

// Voer de INSERT INTO STATEMENT uit
mysqli_query($conn, $sql);

echo "Inserted successfully";
mysqli_close($conn); // Sluit de database verbinding
header('Location: index.php');