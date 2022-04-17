<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
<?php
    $user;
    include_once "common/header.php";
    if (!isset($_SESSION["user"])) {
        header("Location: index.php");
        die();
    } else {
        $user = $_SESSION["user"];
    }
    if (isset($_SESSION["login"])) { ?>
    <div class="success show">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg"><?php echo $_SESSION['login']; ?></span>
        <span class="close-btn">
            <span class="fas fa-times"></span>
        </span>
    </div>
<?php
    unset($_SESSION['login']);
    }
?>
<main>
    <div class="content">
        <div class="profile-container">
            <div class="avatar">
                <img src="img/avatar.jpg">
                <input type="file" id="file">
                <label for="file" id="upload">feltöltés</label>
            </div>
            <h3><?php echo strtoupper($user["username"]) ?></h3>
            <form action="edit_profile.php" method="POST">
                <div class="profile-inputs">
                    <span>
                        <input type="password" placeholder="Jelszó" name="password" required>
                    </span><br>
                    <span>
                        <input type="password" placeholder="Új jelszó" name="NewPassword" required>
                    </span><br>
                    <span>
                        <input type="password" placeholder="Új jelszó megerősítése" name="NewPasswordConfirm" required>
                    </span><br>
                    <button type="submit" name="submit" class="edit-btn">Módosítás</button>
                </div>
            </form>
            <button name="profile-delete" class="delete-btn">Fiók törlése</button>
        </div>
    </div>
</main>
<?php include_once "common/footer.html"?>
</body>
</html>
