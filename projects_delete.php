<?php
require 'database.php';

$inbox_id = $_GET['inbox_id'];

$sql = "DELETE FROM projects WHERE inbox_id = $inbox_id";

$resuld = mysqli_query($conn,$sql);

$sql2 = "DELETE FROM calendar WHERE inbox_id = $inbox_id";

$resuld = mysqli_query($conn,$sql2);

if (mysqli_query($conn,$sql2)) {
    header("location: projects.php");
}