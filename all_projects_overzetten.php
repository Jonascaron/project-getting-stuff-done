<?php

require 'database.php';

session_start();

/*if (!isset($_SESSION["logedin"])) {
    header("location: login.php");
}*/
$id = $_POST["id"];
$action_name = $_POST["action_name"];

$sql = "SELECT * FROM inbox WHERE id = $id";

$result = mysqli_query($conn,$sql);

$inbox = mysqli_fetch_assoc($result);

$name = $inbox["name"];
$text = $inbox["text"];
$deadline = $inbox["deadline"];

$sql = "INSERT INTO projects (name, action_name, text, deadline)
VALUES ('$name', '$action_name','$text','$deadline')";

// Voer de INSERT INTO STATEMENT uit
mysqli_query($conn, $sql);

echo "Inserted successfully";
mysqli_close($conn); // Sluit de database verbinding

?>