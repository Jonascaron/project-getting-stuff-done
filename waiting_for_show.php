<?php
require 'database.php';

$inbox_id= $_GET["inbox_id"];

$sql = "SELECT * FROM waiting_for WHERE inbox_id = $inbox_id";

$result = mysqli_query($conn, $sql);

$waiting_for = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $waiting_for['name'] ?></h5>
            <p class="card-text">wait_for <?php echo $waiting_for['wait_for'] ?></p>
            <p class="card-text">text <?php echo $waiting_for['text'] ?></p>
            <p class="card-text">creation_date <?php echo $waiting_for['creation_date'] ?></p>
            <a href="waiting_for.php" class="btn btn-primary">terug</a>
        </div>
    </div>
</body>
</html>