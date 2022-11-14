<?php
require 'database.php';

$inbox_id = $_POST['inbox_id'];
$deadline = $_POST['deadline'];
$text = $_POST['text'];
$name = $_POST['name'];
$wait_for = $_POST['wait_for'];

$sql = "UPDATE waiting_for SET name = '$name',wait_for = '$wait_for', text = '$text' WHERE inbox_id = $inbox_id";

$resuld = mysqli_query($conn,$sql);

$sql2 = "UPDATE calendar SET name = '$name', deadline = '$deadline' WHERE inbox_id = $inbox_id";

$result = mysqli_query($conn,$sql2);

if (mysqli_query($conn,$sql2)) {
    header("location: projects.php");
}