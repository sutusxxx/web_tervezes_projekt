<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'webtervezes');

$connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die('Connection failed.' . mysqli_connect_error());
?>