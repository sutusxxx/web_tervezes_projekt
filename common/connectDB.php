<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'webtervezes');

// $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
// if(!$connection ) {
//     die('Could not connect');
// }
// echo 'Connected successfully';
// $sql = 'CREATE Database webtervezes';
// $retval = mysqli_query($connection, $sql);

// if (!$retval ) {
//    die('Could not create database');
// }

// mysqli_select_db(DB_NAME);

// $sql = 'CREATE TABLE users (
//             username VARCHAR(30),
//             password VARCHAR(250),
//             email VARCHAR(30),
//             date_of_birth DATE,
//             gender VARCHAR(1))';

// $retval = mysqli_query($connection, $sql);

// if (!$retval ) {
//    die('Could not create table');
// }

// $sql = 'CREATE TABLE items (
//             id int,
//             name VARCHAR(30),
//             description VARCHAR(60),
//             price int,
//             type VARCHAR(30))';

// $retval = mysqli_query($connection, $sql);

// if (!$retval ) {
//     die('Could not create table');
// }

$connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die('Connection failed.' . mysqli_connect_error());
?>

<!--
CREATE DATABASE webtervezes;

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
