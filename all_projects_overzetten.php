<?php

require 'database.php';

session_start();

/*if (!isset($_SESSION["logedin"])) {
    header("location: login.php");
}*/
$id = $_POST["id"];

$sql = "SELECT * FROM inbox WHERE id = $id";

$result = mysqli_query($conn,$sql);

$inbox = mysqli_fetch_assoc($result);

$user_id = $_SESSION["id"];
$inbox_id = $inbox["id"];
$name = $inbox["name"];
$text = $inbox["text"];
$deadline = $inbox["deadline"];

$sql = "INSERT INTO projects (user_id, inbox_id, name, text, deadline)
VALUES ('$user_id','$inbox_id','$name','$text','$deadline')";

mysqli_query($conn, $sql);

$sql3 = "INSERT INTO calendar (user_id, inbox_id, name, deadline)
VALUES ('$user_id','$inbox_id', '$name','$deadline')";

mysqli_query($conn, $sql3);

echo "Inserted successfully";

$sql2 = "DELETE FROM inbox WHERE id = $id";

$resuld = mysqli_query($conn,$sql2);

header('Location: inbox.php');
?>