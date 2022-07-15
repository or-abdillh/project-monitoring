<?php

$username = "root";
$password = "";
$hostname = "localhost";
$database = "project_monitoring";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) die("Cannot Connected!!");

?>
