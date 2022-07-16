<?php

// Get all records
require "./connection.php";

$SQL= "SELECT * FROM projects";
$query_results = mysqli_query($conn, $SQL);
$array_results = [];

while( $row = mysqli_fetch_assoc($query_results) )
{
    $array_results[] = $row;
}

echo json_encode($array_results);

?>
