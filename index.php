<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Kezdőlap</title>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
<?php include_once "common/header.php"?>
<main>
    <h1>Üdvözöljük honlapunkon!</h1>
    <p>Kérjük értékelje honlapunkat!</p>
    <form>
        <textarea name="feeds" rows="7" cols="100" maxlength="500"
                  placeholder="Ide írhatja véleményét (max.500 karakter)!"></textarea><br/>
        <input type="submit">
    </form>
</main>
<?php include_once "common/footer.html"?>
</body>
</html>