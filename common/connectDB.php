<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'webtervezes');

$connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die('Connection failed.' . mysqli_connect_error());
?>

<!-- 
CREATE TABLE users (
    username VARCHAR(30), 
    password VARCHAR(250), 
    email VARCHAR(30), 
    date_of_birth DATE,
    gender VARCHAR(1)
); 

CREATE TABLE items (
    id int,
    name VARCHAR(30),
    description VARCHAR(60),
    price int,
    type VARCHAR(30)
);
-->