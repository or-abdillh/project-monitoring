<?php

require "./connection.php";

if ( isset($_POST["create"]) )
{
    // Parse array
    $name = $_POST["name"];
    $client = $_POST["client"];
    $leader = $_POST["leader"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $progress = $_POST["progress"];

    $SQL = "INSERT INTO projects VALUES (NULL, '$name', '$client', '$leader', '$start_date', '$end_date', '$progress')";
    $query_results = mysqli_query($conn, $SQL);

    if ( !mysqli_error($conn) ) {
        header ("Location: ../index.php?res=1");
    } else {
        header ("Location: ../index.php?res=0");
    }
}


?>
