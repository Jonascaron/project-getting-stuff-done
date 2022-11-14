<?php
require 'database.php';
session_start();
$user_id = $_SESSION["id"];
$name = $_POST["name"];
$text = $_POST["text"];
$deadline = $_POST["deadline"];
$sql = "INSERT INTO inbox (user_id, name, text, deadline)
VALUES ('$user_id', '$name','$text','$deadline')";

mysqli_query($conn, $sql);

echo "Inserted successfully";
mysqli_close($conn);
header('Location: inbox.php');