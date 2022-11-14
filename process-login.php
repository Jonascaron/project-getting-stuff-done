<?php

require 'database.php';

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);
if ($result->num_rows == 0) {
    header('Location: ?error=Deze gebruiker bestaat niet.');
} else {
    session_start();
    $_SESSION["logedin"] = true;
    $_SESSION["id"] = $user["id"];
    $_SESSION["email"] = $user["email"];
    $_SESSION["firstname"] = $user["firstname"];
    $_SESSION["lastname"] = $user["lastname"];
    $_SESSION["role"] = $user["role"];
    if($user['role'] == 'regular'){
        header('Location: inbox.php');
    }
    if($user['role'] == 'admin'){
        header('Location: admin.php');
    }
}

?>