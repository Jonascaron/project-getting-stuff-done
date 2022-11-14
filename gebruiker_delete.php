<?php
require 'database.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = $id";

$resuld = mysqli_query($conn,$sql);

$sql2 = "DELETE FROM inbox WHERE user_id = $id";

$resuld = mysqli_query($conn,$sql2);

$sql3 = "DELETE FROM calendar WHERE user_id = $id";

$resuld = mysqli_query($conn,$sql3);

$sql4 = "DELETE FROM projects WHERE user_id = $id";

$resuld = mysqli_query($conn,$sql4);

$sql5 = "DELETE FROM waiting_for WHERE user_id = $id";

$resuld = mysqli_query($conn,$sql5);

if (mysqli_query($conn,$sql5)) {
    header("location: admin.php");
}