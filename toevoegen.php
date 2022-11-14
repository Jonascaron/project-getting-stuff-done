<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process_toevoegen.php" method="post">
        <div class="input-group">
            <input type="text" name="name" id="name" placeholder="name">
        </div>
        <div class="input-group">
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
        </div>
        <div class="input-group">
            <input type="date" name="deadline" id="deadline">
        </div>
        <div class="input-group">
            <button type="submit">toevoegen</button>
        </div>
    </form>
</body>
</html>