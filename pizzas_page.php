<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Pizzák</title>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
<?php include_once "header.php"?>
<main>
    <div class="content">
        <table>
            <tr>
                <th>Pizza neve</th>
                <th>Mérete</th>
                <th>Ár</th>
                <th>Leírás</th>
                <th>Kosárba</th>
            </tr>
            <tr>
                <td>Margherita</td>
                <td>2100ft</td>
                <td>32cm</td>
                <td>(paradicsomszósz, paradicsom, bazsalikom, mozzarela)</td>
                <td><a href="cart_page.html"> <img src="img/margherita.jpg" alt="Margherita" title="Margherita pizza" width="150"></a></td>
            </tr>
            <tr>
                <td>Gombás</td>
                <td>2800ft</td>
                <td>32cm</td>
                <td>(paradicsomszósz, paradicsom, bazsalikom, gomba)</td>
                <td><a href="cart_page.html"> <img src="img/gombas.jpg" alt="Gombás" title="Gombás pizza" width="150"></a></td>
            </tr>
            <tr>
                <td>Son-Go-Ku</td>
                <td>2300ft</td>
                <td>32cm</td>
                <td>(paradicsomszósz, paradicsom, sajt, sonka, gomba)</td>
                <td><a href="cart_page.html"><img src="img/songoku.jpg" alt="Son-Go-Ku" title="Son-Go-Ku pizza" width="150"></a></td>
            </tr>
            <tr>
                <td>Négy évszak</td>
                <td>2500ft</td>
                <td>32cm</td>
                <td> (margaréta alapon zöldborsó, sonka, kukorica, gomba, sajt)</td>
                <td><a href="cart_page.html"><img src="img/Negyevszak.jpg" alt="Négy évszak" title="Négy évszak pizza" width="150"></a></td>
            </tr>
            <tr>
                <td>Aljas pizza</td>
                <td>2700ft</td>
                <td>32cm</td>
                <td>(rettentő csípős csak saját felelősségre ajáljuk fogyasztani!)</td>
                <td><a href="cart_page.html"><img src="img/aljas.jpg" alt="Aljas" title="Aljas pizza" width="150"></a></td>
            </tr>
            <tr>
                <td>Négysajtos</td>
                <td>2800ft</td>
                <td>32cm</td>
                <td>(trapista, gorgonzola, parmezán, mozzarella, rukkola)</td>
                <td><a href="cart_page.html"><img src="img/negysajtos.jpg" alt="Négysajtos" title="Négysajtos pizza" width="150"></a></td>
            </tr>
            <tr>
                <td>Maradék</td>
                <td>2900ft</td>
                <td>32cm</td>
                <td>(meglepetés pizza, mindig változó és bármi  lehet rajta)</td>
                <td><a href="cart_page.html"><img src="img/maradek.jpg" alt="Maradék" title="Maradék pizza" width="150"></a></td>
            </tr>
            <tr>
                <td>Mexikói</td>
                <td>3200ft</td>
                <td>32cm</td>
                <td>(csípős paradicsomszósz, sonka, sajt, kukorica, bab)</td>
                <td><a href="cart_page.html"><img src="img/Mexikoi.jpg" alt="Mexikói" title="Mexikói pizza" width="150"></a></td>
            </tr>
        </table>
    </div> 
</main>
<?php include_once "footer.html"?>
</body>
</html>