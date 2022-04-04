<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztráció</title>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
<?php include_once "common/header.php"?>
<main>
    <header>
        <h1>Regisztrálj az oldalra!</h1>
    </header>
    <div class="registration-container">
        <form action='auth/sign_up.php' method="POST">
            <label>Felhasználónév:</label>
            <input type="text" name="username" id="username" required><br>
            <label>Jelszó:</label>
            <input type="password" name="password" id="password" required><br>
            <label>Jelszó megerősítése:</label>
            <input type="password" name="confirmPassword" id="confirmPassword" required><br>
            <label>E-mail cím:</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label>Születési dátum:</labe>
            <input type="date" name="dateOfBirth" id="dateOfBirth" required><br>
            Nem:
            <label><input type="radio" name="gender" value="M"/>Férfi</label>
            <label><input type="radio" name="gender" value="F"/>Nő</label>
            <div class="checkbox-container">
                <label>
                     <input type="checkbox" name="conditions" required>
                     Elfogadom a <a href="terms_and_conditions.php"> felhasználási feltételeket</a> és az <a href="privacy_policy.php">adatvédelmi nyilatkozatot</a>!   
                </label>
                <br>
                <label>
                     <input type="checkbox"> Feliratkozás hírlevélre.
                </label>
            </div>
            <input type="submit" name="submit" id="submit" value="Regisztráció">
        </form>
</main>
<?php include_once "common/footer.html"?>
</body>
</html>