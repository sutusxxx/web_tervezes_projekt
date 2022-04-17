<?php
require_once('common/functions.php');
include_once('classes/user.php');
session_start();
$users = loadUsers();
$errors = [];
if (isset($_POST['submit'])) {
    if (!isset($_POST['username']) || trim($_POST['username']) === '')
        $errors[] = "A felhasználónév megadása kötelező!";

    if (!isset($_POST['password']) || trim($_POST['password']) === '' || !isset($_POST['password']) || trim($_POST['password']) === '')
        $errors[] = "A jelszó megadása kötelező!";

    if (!isset($_POST['email']) || trim($_POST['email']) === '')
        $errors[] = "Az email cím megadása kötelező!";

    if (!isset($_POST['gender']) || trim($_POST['gender']) === '')
        $errors[] = "Az nem cím megadása kötelező!";

    if (!isset($_POST['conditions']) || trim($_POST['conditions']) === '')
        $errors[] = "A feltételek elfogadása kötelező!";

    if ($_POST['password'] !== $_POST['confirmPassword']) {
        $errors[] = "A jelszó és a jelszó megerősítése nem egyezik!";
    }

    foreach($users as $user) {
        if($user['username'] === trim($_POST['username'])) {
            $errors[] = "A felhasználónév már foglalt!";
        }
    }

    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $email = $_POST['email'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $gender = $_POST['gender'];
    // $user = new User($username, $password, $email, $dateOfBirth, $gender);
    validatePassword($password, $errors);
    $user = ['username' => $username, 'password' => password_hash($password, PASSWORD_DEFAULT), 'email' => $email, 'dateOfBirth' => $dateOfBirth, 'gender' => $gender];
    if (count($errors) === 0) {
        saveUser($user);
    }
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztráció</title>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/registration.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
<?php include_once "common/header.php"?>
<main>
    <div class="status">
        <?php if (count($errors) > 0) {
            foreach ($errors as $error) { ?>
            <p><?php echo $error; ?></p>
        <?php }
        } ?>
    </div>
    <div class="registration-container">
    <h1>Regisztrálj az oldalra!</h1>
        <form action='registration.php' method="POST">
            <div class="input-container">
                <label>Felhasználónév:</label><br>
                <input type="text" name="username" id="username" autocomplete="off"><br>
            </div>
            <div class="input-container">
                <label>Jelszó:</label><br>
                <input type="password" name="password" id="password"><br>
            </div>
            <div class="input-container">
                <label>Jelszó megerősítése:</label><br>
                <input type="password" name="confirmPassword" id="confirmPassword"><br>
            </div>
            <div class="input-container">
                <label>E-mail cím:</label><br>
                <input type="email" name="email" id="email" placeholder="example@email.com" autocomplete="off"><br>
            </div>
            <div class="input-container">
                <label>Születési dátum:</label><br>
                <input type="date" name="dateOfBirth" id="dateOfBirth"><br>
            </div>
            Nem:
            <label><input type="radio" name="gender" value="M" checked/>Férfi</label>
            <label><input type="radio" name="gender" value="F"/>Nő</label>
            <div class="checkbox-container">
                <label>
                     <input type="checkbox" name="conditions">
                     Elfogadom a <a href="terms_and_conditions.php"> felhasználási feltételeket</a> és az <a href="privacy_policy.php">adatvédelmi nyilatkozatot</a>!   
                </label>
                <br>
                <label>
                     <input type="checkbox"> Iratkozz fel a hírlevélre.
                </label>
            </div>
            <div class="input-container">
            <input class="registration-button" type="submit" name="submit" id="submit" value="Regisztráció">
            </div>
        </form>
</main>
<?php include_once "common/footer.html"?>
</body>
</html>