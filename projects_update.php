<?php
require 'database.php';

$inbox_id= $_GET["inbox_id"];

$sql = "SELECT * FROM projects WHERE inbox_id = $inbox_id";

$result = mysqli_query($conn, $sql);

$project = mysqli_fetch_assoc($result);

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
    <form action="all_projects_update.php" method="post">
        <input type="hidden" name="inbox_id" value="<?php echo $project["inbox_id"] ?>">
        <div class="input-group">
            <input type="text" name="name" id="name" placeholder="name" value="<?php echo $project["name"] ?>">
        </div>
        <div class="input-group">
            <textarea name="text" id="text" cols="30" rows="10" ><?php echo $project["text"] ?></textarea>
        </div>
        <div class="input-group">
            <input type="date" name="deadline" id="deadline" value="<?php echo $project["deadline"] ?>">
        </div>
        <div class="input-group">
            <button type="submit">update</button>
        </div>
    </form>
</body>
</html>