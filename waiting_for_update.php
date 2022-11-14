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
    <title>Document</title>
</head>
<body>
    <form action="all_waiting_for_update.php" method="post">
        <input type="hidden" name="inbox_id" value="<?php echo $waiting_for["inbox_id"] ?>">
        <div class="input-group">
            <input type="text" name="name" id="name" placeholder="name" value="<?php echo $waiting_for["name"] ?>">
        </div>
        <div class="input-group">
            <input type="text" name="wait_for" id="wait_for" placeholder="wait_for" value="<?php echo $waiting_for["wait_for"] ?>">
        </div>
        <div class="input-group">
            <textarea name="text" id="text" cols="30" rows="10" ><?php echo $waiting_for["text"] ?></textarea>
        </div>
        <div class="input-group">
            <input type="date" name="deadline" id="deadline" value="<?php echo $waiting_for["deadline"] ?>">
        </div>
        <div class="input-group">
            <button type="submit">update</button>
        </div>
    </form>
</body>
</html>