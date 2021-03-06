<?php session_start() ?>
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
<?php 
    include_once "common/functions.php";

    include_once "common/header.php";

    $itemList = loadItems("pizza");

?>
<main>
    <div class="content">
        <?php if (count($itemList) > 0) { ?>
        <table>
            <tr>
                <th>Pizza neve</th>
                <th>Leírás</th>
                <th>Ár</th>
                <th>Kosárba</th>
            </tr>
            <?php foreach ($itemList as $item) { ?>
            <tr>
                <td>
                    <b><?php echo $item['name']; ?></b>
                </td>
                <td>
                    <b><?php echo $item['description']; ?></b>
                </td>
                <td>
                    <b><?php echo $item['price'] . " Ft"; ?></b>
                </td>
                <td>
                    <button class="add-to-cart-btn" onclick="addToCart()"><i class="fas fa-cart-plus"></i></button>
                </td>
            </tr>
            <?php } ?>
        <?php } else { ?>
            :(
        <?php } ?>
<!-- 
            <tr>
                <td>Margherita</td>
                <td>2100ft</td>
                <td>(paradicsomszósz, paradicsom, bazsalikom, mozzarela)</td>
                <td><a href="cart_page.html"> <img src="img/margherita.jpg" alt="Margherita" title="Margherita pizza" width="150"></a></td>
            </tr>
            <tr>
                <td>Gombás</td>
                <td>2800ft</td>
                <td>(paradicsomszósz, paradicsom, bazsalikom, gomba)</td>
                <td><a href="cart_page.html"> <img src="img/gombas.jpg" alt="Gombás" title="Gombás pizza" width="150"></a></td>
            </tr>
            <tr>
                <td>Son-Go-Ku</td>
                <td>2300ft</td>
                <td>(paradicsomszósz, paradicsom, sajt, sonka, gomba)</td>
                <td><a href="cart_page.html"><img src="img/songoku.jpg" alt="Son-Go-Ku" title="Son-Go-Ku pizza" width="150"></a></td>
            </tr>
            <tr>
                <td>Négy évszak</td>
                <td>2500ft</td>
                <td> (margaréta alapon zöldborsó, sonka, kukorica, gomba, sajt)</td>
                <td><a href="cart_page.html"><img src="img/Negyevszak.jpg" alt="Négy évszak" title="Négy évszak pizza" width="150"></a></td>
            </tr>
            <tr>
                <td>Aljas pizza</td>
                <td>2700ft</td>
                <td>(rettentő csípős csak saját felelősségre ajáljuk fogyasztani!)</td>
                <td><a href="cart_page.html"><img src="img/aljas.jpg" alt="Aljas" title="Aljas pizza" width="150"></a></td>
            </tr>
            <tr>
                <td>Négysajtos</td>
                <td>2800ft</td>
                <td>(trapista, gorgonzola, parmezán, mozzarella, rukkola)</td>
                <td><a href="cart_page.html"><img src="img/negysajtos.jpg" alt="Négysajtos" title="Négysajtos pizza" width="150"></a></td>
            </tr>
            <tr>
                <td>Maradék</td>
                <td>2900ft</td>
                <td>(meglepetés pizza, mindig változó és bármi  lehet rajta)</td>
                <td><a href="cart_page.html"><img src="img/maradek.jpg" alt="Maradék" title="Maradék pizza" width="150"></a></td>
            </tr>
            <tr>
                <td>Mexikói</td>
                <td>3200ft</td>
                <td>(csípős paradicsomszósz, sonka, sajt, kukorica, bab)</td>
                <td><a href="cart_page.html"><img src="img/Mexikoi.jpg" alt="Mexikói" title="Mexikói pizza" width="150"></a></td>
            </tr> -->
        </table>
    </div> 
</main>
<?php include_once "common/footer.html"?>
</body>
</html>