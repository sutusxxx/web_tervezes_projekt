<?php 
include_once "common/functions.php";
session_start();
$user;
    
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    die();
} else {
    $user = $_SESSION["user"];
}

define("DEFAULT_AVATAR", "img/profile_pictures/avatar.jpg");
$avatar = DEFAULT_AVATAR;
if ($user) {
    $url = "img/profile_pictures/". strtolower($user["username"]);
}

$extensions = ["png", "jpg"];

foreach ($extensions as $ext) {
    if (file_exists("$url.$ext")) {
        $avatar = "$url.$ext";
    }

}
if (isset($_GET['delete'])) {
    deleteUser($user['username']);
    unset($_SESSION["user"]);
    $_SESSION['status'] = "A fiók sikeresen törölve!";

}

$errors = [];

if (isset($_POST['upload']) && is_uploaded_file($_FILES["file"]["tmp_name"]) && $user) {
    uploadProfilePic($user["username"], $errors);

    if (count($errors) === 0) {
        $ext = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));
        $url = "img/$user.$ext";

        header("Location: profile.php");
    }
}

?>
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
<?php include_once "common/header.php"; ?>
<main>
<div class="status">
        <?php if (count($errors) > 0) {
            foreach ($errors as $error) { ?>
            <p><?php echo $error; ?></p>
        <?php }
        } ?>
    </div>
    <div class="content">
        <div class="profile-container">
            <form action="profile.php" method="POST" enctype="multipart/form-data">
                <div class="avatar">
                    <img src="<?php echo $avatar; ?>" alt="Profilkép">
                        <input type="file" id="file" name="file">
                        <label for="file" id="upload">feltöltés</label>
                </div>
                <button class="upload-button" type="submit" name="upload"><i class="fas fa-save"></i></button>
            </form>
            <div class="user-info">
            <h3><?php echo strtoupper($user["username"]) ?></h3>
            <p><?php echo strtolower($user["email"])?></p>
            <p>
            <?php 
            if (strtolower($user["gender"]) === 'm') {
                echo "Férfi";    
            } else {
                echo "Nő";
            }
            ?>
            </p>
            </div>
            <div class="profile-inputs">
                <form action="profile.php" method="POST">
                    <span>
                        <input type="password" placeholder="Jelszó" name="password">
                    </span><br>
                    <span>
                        <input type="password" placeholder="Új jelszó" name="NewPassword">
                    </span><br>
                    <span>
                        <input type="password" placeholder="Új jelszó megerősítése" name="NewPasswordConfirm">
                    </span><br>
                    <input type="submit" name="submit" class="edit-btn" value="Módosítás">
                </form>
                <form action="profile.php" method="GET">
                    <input type="submit" name="delete" class="delete-btn" value="Fiók törlése">
                </form>
            </div>
        </div>
    </div>
</main>
<?php include_once "common/footer.html"?>
</body>
</html>
