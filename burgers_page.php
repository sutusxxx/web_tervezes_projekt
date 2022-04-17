<?php session_start() ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Burgerek</title>
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
                <th>Hamburger neve</th>
                <th>Ár</th>
                <th>Leírás</th>
                <th>Kosárba</th>
            </tr>
            <tr>
                <td>Classic</td>
                <td>2300ft</td>
                <td>(Marhahúspogácsa, paradicsom, saláta, házi öntet )</td>
                <td><a href="cart_page.html"> <img src="img/classic.jpg" alt="Classic" title="Classic hamburger" width="150"></a></td>
            </tr>
            <tr>
                <td>Sajtburger</td>
                <td>2400ft</td>
                <td>(Marhahúspogácsa, paradicsom, saláta, házi öntet, sajt)</td>
                <td><a href="cart_page.html"> <img src="img/sajtburger.jpg" alt="Sajtburger" title="Sajtburger" width="150"></a></td>
            </tr>
            <tr>
                <td>Texas burger</td>
                <td>2600ft</td>
                <td>(Marhahúspogácsa, paradicsom, saláta, házi öntet, hagymakarika)</td>
                <td><a href="cart_page.html"><img src="img/texas.jpg" alt="Texas burger" title="Texas burger" width="150"></a></td>
            </tr>
            <tr>
                <td>Vegán burger</td>
                <td>3200ft</td>
                <td> (classic hamburger, húsmentes húspogácsával.)</td>
                <td><a href="cart_page.html"><img src="img/veganhamburger.jpg" alt="Vegán hamburger" title="Vegán hamburger" width="150"></a></td>
            </tr>
            <tr>
                <td>Csibeburger</td>
                <td>2300ft</td>
                <td>(Classic hamburger, csirkehúspogácsával.)</td>
                <td><a href="cart_page.html"><img src="img/csibeburger.jpg" alt="Csibeburger" title="Csibeburger" width="150"></a></td>
            </tr>
            <tr>
                <td>BBQ burger</td>
                <td>3100ft</td>
                <td>(saláta, paradicsom, BBQ szósz, sajt, marhahúspogácsa)</td>
                <td><a href="cart_page.html"><img src="img/BBQburger.jpg" alt="BBQ burger" title="BBQ burger" width="150"></a></td>
            </tr>
            <tr>
                <td>Bacon burger</td>
                <td>3200ft</td>
                <td>(marhahús mediumra sütve, karamellizált hagyma, uborka, saláta, paradicsom, BBQ szósz, cheddar sajt, baconszalonna, tükörtojás)</td>
                <td><a href="cart_page.html"><img src="img/baconburger.jpg" alt="Bacon burger" title="Bacon burger" width="150"></a></td>
            </tr>
            <tr>
                <td>XXL burger</td>
                <td>3600ft</td>
                <td>(Classic burger, dupla hússal, hagymakarikával, sajtal )</td>
                <td><a href="cart_page.html"><img src="img/XXLburger.jpg" alt="XXL burger" title="XXL burger" width="150"></a></td>
            </tr>
        </table>
    
    </div>
</main>
<?php include_once "common/footer.html"?>
</body>
</html>