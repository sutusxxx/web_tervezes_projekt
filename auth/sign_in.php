<?php
require_once('../common/functions.php');
require_once('../classes/user.php');
$users = loadUsers();
$message = "";

if(isset($_POST["submit"])) {
    if (!isset($_POST["username"]) || trim($_POST["username"]) === "" ||
        !isset($_POST["password"]) || trim($_POST["password"]) === ""
    ) {
        $message = "A felhasználónév és jelszó megadása kötelező!";
    } else {
        $username = strtolower(trim($_POST["username"]));
        $password = $_POST["password"];

        $message = "Sikertelen bejelentkezés! A felhasználónév vagy a jelszó nem megfelelő!";

        foreach ($users as $user) {
            if ($user["username"] === $username && password_verify($password, $user["password"])) {
                $message = "Sikeres belépés!";
                header("Location: http://localhost/index.php");
            }
        }
    }
    echo($message);
}