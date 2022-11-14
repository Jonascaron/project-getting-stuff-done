<?php

session_start();
if (!isset($_SESSION["logedin"])) {
    echo "deze gebruiker mag hier niet komen";
    exit;
}

require 'database.php';
$user_id = $_SESSION["id"];

$sql = "SELECT * FROM waiting_for WHERE user_id = $user_id";

$result = mysqli_query($conn, $sql);

$waiting_for = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/waiting_forstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li>
                <a href="index.php">home</a>
            </li>
            <li>
                <a href="inbox.php">inbox</a>
            </li>
            <li>
                <a href="#">waiting_for</a>
            </li>
            <li>
                <a href="projects.php">projects</a>
            </li>
            <li>
                <a href="calender.php">calender</a>
            </li>
            <li>
                <a href="login.php">login</a>
            </li>
            <li>
                <a href="logout.php">logout</a>
            </li>
        </ul>
    </nav>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>name</th>
                <th>wait for</th>
                <th>creation_date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($waiting_for as $wait_for) : ?>
                <tr>
                    <td><?php echo $wait_for["name"] ?></td>
                    <td><?php echo $wait_for["wait_for"] ?></td>
                    <td><?php echo $wait_for["creation_date"] ?></td>
                    <td><a href="waiting_for_delete.php?inbox_id=<?php echo $wait_for["inbox_id"] ?>">delete</a></td>
                    <td><a href="waiting_for_update.php?inbox_id=<?php echo $wait_for["inbox_id"] ?>">update</a></td>
                    <td><a href="waiting_for_show.php?inbox_id=<?php echo $wait_for["inbox_id"] ?>">show</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>