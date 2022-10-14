<?php

require 'database.php';

session_start();

/*if (!isset($_SESSION["logedin"])) {
    header("location: login.php");
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="all_projects_overzetten.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_POST["id"]; ?>">
        <input type="text" name="action_name" id="action_name" placeholder="action_name">
        <button type="submit">toevoegen</button>
    </form>
</body>
</html>
