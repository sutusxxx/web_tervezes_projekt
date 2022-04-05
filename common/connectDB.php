<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'webtervezes');

// $connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
// or die('Connection failed.' . mysqli_connect_error());

$db = new PDO("mysql:host=localhost;dbname=webtervezes;charset=utf8", DB_USER, DB_PASSWORD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<!-- 
CREATE TABLE users (
    username VARCHAR(30), 
    password VARCHAR(30), 
    email VARCHAR(30), 
    date_of_birth DATE,
    gender VARCHAR(1)); 
-->