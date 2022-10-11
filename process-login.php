<?php

require 'database.php';

$email = $_POST["email"];
$password = $_POST["password"];

//de sql query
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);
if ($result->num_rows == 0) {
    header('Location: ?error=Deze gebruiker bestaat niet.');
} else {
    session_start();
    $_SESSION["logedin"] = true;
    $_SESSION["email"] = $user["email"];
    $_SESSION["firstname"] = $user["firstname"];
    $_SESSION["lastname"] = $user["lastname"];
    if($user['role'] == 'regular'){
        header('Location: bestel.php');
    }
    if($user['role'] == 'admin'){
        header('Location: start.php');
    }
}

?>