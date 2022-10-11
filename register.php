<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/registerstyle.css">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <p class="title">register</p>
        <form action="process-register.php" method="POST" class="form">
            <div class="input-group">
                <input type="firstname" class="first" placeholder="Voornaam" name="firstname" required>
                <input type="lastname" placeholder="Achternaam" name="lastname" required>
            </div>
            <div class="input-group">
                <input type="phonenumber" class="first" placeholder="Telefoon nummer" name="phonenumber" required>
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" class="first" placeholder="Wachtwoord" name="password" required>
                <input type="password" placeholder="Herhaal wachtwoord" name="password2" required>
            </div>
            <div class="input-group">
                <input type="date" class="first" name="date-of-birth" required>
                <input type="address" placeholder="address" name="address" required>
            </div>
            <div class="input-group">
                <input type="zipcode" class="first" placeholder="zipcode" name="zipcode" required>
                <input type="city" placeholder="city" name="city" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Registreren</button>
            </div>
            <p class="login-register-text">Heb je een account? <a href="login.php">Inloggen</a>.</p>
        </form>
    </div>
</body>

</html>