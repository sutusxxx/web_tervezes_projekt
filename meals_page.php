<?php session_start() ?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <title>Sültek</title>
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
                <th>Sültek neve</th>
                <th>Ár</th>
                <th>Leírás</th>
                <th>Kosárba</th>
            </tr>
            <tr>
                <td>Kacsacomb</td>
                <td>1000ft</td>
                <td>(Lilakáposztával, krumplipürével)</td>
                <td><a href="cart_page.html"> <img src="img/Kacsacomb.jpg" alt="Kacsacomb" title="Kacsacomb"
                            width="150"></a></td>
            </tr>
            <tr>
                <td>Grill csirke egész</td>
                <td>1750ft</td>
                <td>(Választható körettel)</td>
                <td><a href="cart_page.html"> <img src="img/Grillcsirke.jpg" alt="Grill csirke"
                            title="Grill csirke egész" width="150"></a></td>
            </tr>
            <tr>
                <td>Brassói aprópecsenye</td>
                <td>2150ft</td>
                <td>(Úgy készül ahogy mindenki szereti.)</td>
                <td><a href="cart_page.html"> <img src="img/Brassoi.jpg" alt="Brassói" title="Brassói aprópecsenye"
                            width="150"></a></td>
            </tr>
            <tr>
                <td>Rántott sajt</td>
                <td>1955ft</td>
                <td>(Az ár 2db sajtot tartalmaz és hasáb burgonyát )</td>
                <td><a href="cart_page.html"> <img src="img/rantottsajt.jpg" alt="Sajt" title="Rántott sajt"
                            width="150"></a></td>
            </tr>
            <tr>
                <td>Rántott karfiol</td>
                <td>1955ft</td>
                <td>(Az ár 5db karfiolt tartalmaz és hasáb burgonyát)</td>
                <td><a href="cart_page.html"><img src="img/rantottkarfiol.jpg" alt="Karfiol" title="Rántott karfiol"
                            width="150"></a></td>
            </tr>
            <tr>
                <td>Rántott csirkemell</td>
                <td>2000ft</td>
                <td> (1db, 200g, választható körettel)</td>
                <td><a href="cart_page.html"><img src="img/rantottcsirke.jpg" alt="Rántott csirke"
                            title="Rántott csirkemell" width="150"></a></td>
            </tr>
            <tr>
                <td>Rántott pulykamell</td>
                <td>2100ft</td>
                <td>(1db, 200g, választható körettel)</td>
                <td><a href="cart_page.html"><img src="img/rantottpulykamell.jpg" alt="Rántott pulyka"
                            title="Rántott pulykamell" width="150"></a></td>
            </tr>
            <tr>
                <td>Sült kolbász</td>
                <td>1800ft</td>
                <td>(1 pár, kovászos uborkával, burgonyával)</td>
                <td><a href="cart_page.html"><img src="img/sultkolbasz.jpg" alt="Sült kolbász" title="Sült kolbász"
                            width="150"></a></td>
            </tr>
            <tr>
                <td>Marhapörkölt</td>
                <td>2400ft</td>
                <td>(Nokedlivel vagy galuskával kérhető.)</td>
                <td><a href="cart_page.html"><img src="img/marhaporkolt.jpg" alt="Marhapörkölt" title="Marhapörkölt"
                            width="150"></a></td>
            </tr>
            <tr>
                <td>2 személyes kemencés tál</td>
                <td>3200ft</td>
                <td>(2db rántott csirkemell, 2db rántott sajt, 6db rántott karfiol, 3db kacsacomb, vegyes köret)
                </td>
                <td><a href="cart_page.html"><img src="img/2szemelyestal.jpg" alt="2 személyes tál"
                            title="2 személyes kemencés tál" width="150"></a></td>
            </tr>
        </table>
    </div>
</main>
<?php include_once "common/footer.html"?>
</body>

</html>