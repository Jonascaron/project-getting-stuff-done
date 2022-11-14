<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="all_waiting_for_overzetten.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_POST["id"] ?>">
        <input type="text" name="wait_for" id="wait_for" placeholder="wait_for">
        <button type="submit">verplaaten</button>
    </form>
</body>
</html>