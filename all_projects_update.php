<?php
require 'database.php';

$inbox_id = $_POST['inbox_id'];
$deadline = $_POST['deadline'];
$text = $_POST['text'];
$name = $_POST['name'];

$sql = "UPDATE projects SET name = '$name', text = '$text', deadline = '$deadline' WHERE inbox_id = $inbox_id";

$resuld = mysqli_query($conn,$sql);

$sql2 = "UPDATE calendar SET name = '$name', deadline = '$deadline' WHERE inbox_id = $inbox_id";

$result = mysqli_query($conn,$sql2);

if (mysqli_query($conn,$sql2)) {
    header("location: projects.php");
}