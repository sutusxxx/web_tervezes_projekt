<?php session_start() ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Desszertek</title>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
<?php include_once "common/header.php"?>
<main>
    <div class="content">
        <table>
            <tr>
                <th>Desszert neve</th>
                <th>Ár</th>
                <th>Leírás</th>
                <th>Kosárba</th>
            </tr>
            <tr>
                <td>Palacsinta</td>
                <td>500ft</td>
                <td>(lekváros, nutellás, fahéjas, túrós)</td>
                <td><a href="cart_page.html"> <img src="img/palacsinta.jpg" alt="Palacsinta" title="Palacsinta" width="150"></a></td>
            </tr>
            <tr>
                <td>Tiramisu</td>
                <td>1250ft</td>
                <td>(A cukrász ajánlata!)</td>
                <td><a href="cart_page.html"> <img src="img/tiramisu.jpg" alt="Tiramisu" title="Tiramisu" width="150"></a></td>
            </tr>
            <tr>
                <td>Somlói galuska</td>
                <td>1250ft</td>
                <td> (Mazsola nelkül is kérhető!)</td>
                <td><a href="cart_page.html"><img src="img/somloigaluska.jpg" alt="Somlói galuska" title="Somlói galuska" width="150"></a></td>
            </tr>
            <tr>
                <td>Csokiszuflé</td>
                <td>1350ft</td>
                <td>(Vanilia fagyival, tejszinhabbal.)</td>
                <td><a href="cart_page.html"> <img src="img/csokiszufle.jpg" alt="Csokiszuflé" title="Csokiszuflé" width="150"></a></td>
            </tr>
            <tr>
                <td>Almáspite</td>
                <td>1500ft</td>
                <td>(Vanilia fagyival, tejszinhabbal.)</td>
                <td><a href="cart_page.html"> <img src="img/almaspite.jpg" alt="Almáspite" title="Almáspite" width="150"></a></td>
            </tr>
            <tr>
                <td>Fagylalt kehely</td>
                <td>1555ft</td>
                <td>(3db választható fagyival.)</td>
                <td><a href="cart_page.html"><img src="img/fagylatkehely.jpg" alt="Fagylalt" title="Fagylalt kehely" width="150"></a></td>
            </tr>
        </table>
    </div>
</main>
<?php include_once "common/footer.html"?>
</body>
</html>