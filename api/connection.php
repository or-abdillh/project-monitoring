<?php

$username = "root";
$password = "";
$hostname = "localhost:/var/lib/mysql/mysql.sockt";
$database = "project_monitoring";

$conn = mysqli_connect($hostname, $username, $password, $database);

//if (!$conn) die("Cannot Connected!!");
//mysql_select_db($database, $conn) or die ("Cannot found database : " + $database);

?>
