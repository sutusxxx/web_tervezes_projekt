<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header("Location: http://localhost/profile.php");
    }
?>
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
<?php include_once "common/header.php"?>
<main>
    <div class="status">
        <?php if (isset($_SESSION['status'])) {
            echo $_SESSION['status'];
        }
        unset($_SESSION['status']);
        ?>
    </div>
    <div class="login-container">
        <div class="header">
            <h1>Jelentkezz be!</h1>
        </div>
        <form action="auth/sign_in.php" method="POST">
            <div class="login-inputs">
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Felhasználónév" name="username" autocomplete="off">
                </span><br>
                <span>
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Jelszó" name="password">
                </span><br>
                <button type="submit" name="submit" class="login-button">Bejelentkezés</button>
                <lu class="registration-button"><li><a href="registration.php"><br>Regisztráció</a></li></lu>
            </div>
        </form>
    </div>
</main>
<?php include_once "common/footer.html"?>
</body>
</html>
