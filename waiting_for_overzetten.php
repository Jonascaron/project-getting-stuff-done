<?php

require 'database.php';

session_start();

if (!isset($_SESSION["logedin"])) {
    if ($_SESSION["role"] == "regular") {
        
    }
}
$id = $_POST["id"];

$sql = "INSERT INTO waiting_for (name, text, deadline)
SELECT name, text, deadline FROM inbox WHERE id = '$id'";

mysqli_query($conn, $sql);

header("location: inbox.php");