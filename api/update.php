<?php

require "./connection.php";

if ( isset($_POST["update"]) )
{
    // Parse array
    $key = $_POST["id"];
    $name = $_POST["name"];
    $client = $_POST["client"];
    $leader = $_POST["leader"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $progress = $_POST["progress"];

    $SQL = "UPDATE projects SET name = '$name', client = '$client', leader = '$leader', start_date = '$start_date', end_date = '$end_date', progress = $progress WHERE id = $key";
    $query_results = mysqli_query($conn, $SQL);

    if ( !mysqli_error($conn) ) {
        header("Location: ../index.php?res=1");
    } else {
        header("Location: ../index.php?res=0");
    }
}


?>
