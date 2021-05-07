<?php 

$host = "localhost";
$username = "root";
$password = "";
$database = "proto1"; //enter database name here

$mysqli = new mysqli($host, $username, $password, $database);
if (!$mysqli) {
    die("Cannot connect to mysql");
}
