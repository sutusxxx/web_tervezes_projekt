<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Bejelentkezés</title>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
<?php include_once "header.php"?>
<main>
    <div class="login-container">
        <div class="header">
            <h1>Jelentkezz be!</h1>
        </div>
        <div class="login-inputs">
            <form>
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Felhasználónév" name="username" required>
                </span><br>
                <span>
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Jelszó" name="password" required>
                </span><br>
                <button class="login-button">Bejelentkezés</button>
            </form>
        </div>
    </div>
</main>
<?php include_once "footer.html"?>
</body>
</html>