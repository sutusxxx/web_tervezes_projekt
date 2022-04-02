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
        <form>
            <label>Felhasználónév:</label>
            <input>
            <label>Jelszó:</label>
            <input>
            <label>Jelszó megerősítése:</label>
            <input>
            <label>E-mail cím:</label>
            <input>
            <div class="checkbox-container">
                <label>
                     <input type="checkbox">
                     Elfogadom a felhasználási feltételeket és az <a href="privacy_policy.php">adatvédelmi nyilatkozatot</a>!   
                </label>
                <label>
                     <input type="checkbox">
                </label>
            </div>
            <button type="submit">Regisztráció</button>
        </form>
</main>
<?php include_once "common/footer.html"?>
</body>
</html>