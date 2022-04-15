<?php
    $page = basename($_SERVER['PHP_SELF']);
    session_start();
?>
<nav>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
    </label>
    <ul>
        <li <?php if($page == 'profile.php'){ echo ' class="active"';}?>><a href="profile.php"><i class="icon fa fa-home"></i><br>Profil</a></li>
        <li <?php if($page == 'pizzas_page.php'){ echo ' class="active"';}?>><a href="pizzas_page.php"><i class="icon fa fa-pizza-slice"></i><br>Pizzák</a></li>
        <li <?php if($page == 'burgers_page.php'){ echo ' class="active"';}?>><a href="burgers_page.php"><i class="icon fa fa-burger"></i><br>Burgerek</a></li>
        <li <?php if($page == 'meals_page.php'){ echo ' class="active"';}?>><a href="meals_page.php"><i class="icon fa fa-bacon"></i><br>Sültek</a></li>
        <li <?php if($page == 'desserts_page.php'){ echo ' class="active"';}?>><a href="desserts_page.php"><i class="icon fa fa-cake"></i><br>Desszert</a></li>
        <li <?php if($page == 'drinks_page.php'){ echo ' class="active"';}?>><a href="drinks_page.php"><i class="icon fa fa-glass-whiskey"></i><br>Italok</a></li>
        <li <?php if($page == 'cart_page.php'){ echo ' class="active"';}?>><a href="cart_page.php"><i class="icon fa fa-shopping-cart"></i><br>Kosár</a></li>
        <li <?php if($page == 'contacts_page.php'){ echo ' class="active"';}?>><a href="contacts_page.php"><i class="icon fa fa-phone"></i><br>Kapcsolat</a></li>
    <?php if (isset($_SESSION["user"])) { ?>
        <li <?php if($page == 'login_page.php'){ echo ' class="active"';}?>><a href="auth/logout.php"><i class="icon fa fa-user-lock"></i><br>Kijelentkezés</a></li>
    <?php } else { ?>
        <li <?php if($page == 'index.php'){ echo ' class="active"';}?>><a href="index.php"><i class="icon fa fa-user-lock"></i><br>Belépés</a></li>
    <?php } ?>
    </ul>
</nav>
