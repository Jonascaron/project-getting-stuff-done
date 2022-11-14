<?php

session_start();
if (!isset($_SESSION["logedin"])) {
    echo "deze gebruiker mag hier niet komen";
    exit;
}

require 'database.php';
$user_id = $_SESSION["id"];

$sql = "SELECT * FROM projects WHERE user_id = $user_id";

$result = mysqli_query($conn, $sql);

$projects = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/projectsstyle.css">
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
                <a href="waiting_for.php">waiting_for</a>
            </li>
            <li>
                <a href="#">projects</a>
            </li>
            <li>
                <a href="calender.php">calender</a>
            </li>
            <li>
                <a href="login.php">login</a>
            </li>
        </ul>
    </nav>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>name</th>
                <th>creation_date</th>
                <th>text</th>
                <th>deadline</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $project) : ?>
                <tr>
                    <td><?php echo $project["name"] ?></td>
                    <td><?php echo $project["creation_date"] ?></td>
                    <td><?php echo $project["text"] ?></td>
                    <td><?php echo $project["deadline"] ?></td>
                    <td><a href="projects_delete.php?inbox_id=<?php echo $project["inbox_id"] ?>">delete</a></td>
                    <td><a href="projects_update.php?inbox_id=<?php echo $project["inbox_id"] ?>">update</a></td>
                    <td><a href="projects_show.php?inbox_id=<?php echo $project["inbox_id"] ?>">update</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>