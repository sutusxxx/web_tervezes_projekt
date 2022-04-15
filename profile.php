<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
<?php
    include_once "common/header.php";
    if (!isset($_SESSION["user"])) {
        header("Location: index.php");
        die();
    }
?>
<main>
</main>
<?php include_once "common/footer.html"?>
</body>
</html>
