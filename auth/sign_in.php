<?php
require_once('../common/functions.php');
// require_once('../classes/user.php');

session_start();
$users = loadUsers();
$message = "";

if(isset($_POST["submit"])) {
    if (!isset($_POST["username"]) || trim($_POST["username"]) === "" ||
        !isset($_POST["password"]) || trim($_POST["password"]) === ""
    ) {
        $message = "A felhasználónév és jelszó megadása kötelező!";
        $_SESSION['status'] = $message;
            header("Location: http://localhost/index.php");
    } else {
        $username = strtolower(trim($_POST["username"]));
        $password = $_POST["password"];

        $message = "Sikertelen bejelentkezés! A felhasználónév vagy a jelszó nem megfelelő!";

        if (!$user) {
            $_SESSION['status'] = $message;
            header("Location: http://localhost/index.php");
        }

        foreach ($users as $user) {
            if ($user["username"] === $username && password_verify($password, $user["password"])) {
                $_SESSION["user"] = $user;
                header("Location: http://localhost/profile.php");
            } else {
                $_SESSION['status'] = $message;
                header("Location: http://localhost/index.php");
            }
        }
    }
}
