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

$wait_for = $_POST["wait_for"];
$user_id = $_SESSION["id"];
$inbox_id = $inbox["id"];
$name = $inbox["name"];
$text = $inbox["text"];
$creation_date = $inbox["creation_date"];

$sql = "INSERT INTO waiting_for (user_id, inbox_id, name, wait_for, text, creation_date)
VALUES ('$user_id','$inbox_id','$name','$wait_for','$text','$creation_date')";

mysqli_query($conn, $sql);

$sql3 = "INSERT INTO calendar (user_id, inbox_id, name, deadline)
VALUES ('$user_id','$inbox_id','$name','$deadline')";

mysqli_query($conn, $sql3);

echo "Inserted successfully";

$sql2 = "DELETE FROM inbox WHERE id = $id";

$resuld = mysqli_query($conn,$sql2);

header('Location: inbox.php');
?>