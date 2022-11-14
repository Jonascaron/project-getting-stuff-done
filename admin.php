<?php
require 'database.php';

$sql = "SELECT * FROM users WHERE role = 'regular'";

$result = mysqli_query($conn,$sql);

$all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
    <nav class="navbar">
        <ul>
            <li>
                <a href="logout.php">logout</a>
            </li>
        </ul>
    </nav>
    <a class="button" href="gebruiker_aanmaken.php">gebruiker aanmaken</a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>password</th>
                <th>date of birth</th>
                <th>phonenumber</th>
                <th>address</th>
                <th>zipcode</th>
                <th>city</th>
                <th>role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_users as $user) : ?>
                <tr>
                    <td><?php echo $user["firstname"] ?></td>
                    <td><?php echo $user["lastname"] ?></td>
                    <td><?php echo $user["email"] ?></td>
                    <td><?php echo $user["password"] ?></td>
                    <td><?php echo $user["date_of_birth"] ?></td>
                    <td><?php echo $user["phonenumber"] ?></td>
                    <td><?php echo $user["address"] ?></td>
                    <td><?php echo $user["zipcode"] ?></td>
                    <td><?php echo $user["city"] ?></td>
                    <td><?php echo $user["role"] ?></td>
                    <td><a href="gebruiker_delete.php?id=<?php echo $user["id"] ?>">delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>