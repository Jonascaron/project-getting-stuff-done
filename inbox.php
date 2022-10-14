<?php

session_start();
if (!isset($_SESSION["logedin"])) {
    echo "deze gebruiker mag hier niet komen";
    exit;
}

require 'database.php';

$sql = "SELECT * FROM inbox";

$result = mysqli_query($conn, $sql);

$inboxes = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/buttonstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <title>Document</title>
</head>

<body>
    <a class="button" href="toevoegen.php">toevoegen</a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>name</th>
                <th>creation_date</th>
                <th>deadline</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inboxes as $inbox) : ?>
                <tr>
                    <td><?php echo $inbox["name"] ?></td>
                    <td><?php echo $inbox["creation_date"] ?></td>
                    <td><?php echo $inbox["deadline"] ?></td>
                    <td>
                        <form method="post" action="process_choice.php">
                            <input type="hidden" name="id" value="<?php echo $inbox["id"] ?>">
                            <select id="select" name="select">
                                <option value="" disabled selected> choose option</option>
                                <option value="Projects">Projects</option>
                                <option value="Waiting_For">Waiting_For</option>
                            </select>
                            <input type="submit" name="submit" value="Add">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>