<?php
require 'database.php';

$id = $_GET['id'];

$sql = "DELETE FROM inbox WHERE id = $id";

$resuld = mysqli_query($conn,$sql);

if (mysqli_query($conn,$sql)) {
    header("location: projects.php");
}