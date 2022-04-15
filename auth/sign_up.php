<?php
require_once('../common/functions.php');
// require_once('../classes/user.php');
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
    $user = ['username' => $username, 'password' => password_hash($password, PASSWORD_DEFAULT), 'email' => $email, 'dateOfBirth' => $dateOfBirth, 'gender' => $gender];
    if (count($errors) === 0) {
        saveUser($user);
    }
}
