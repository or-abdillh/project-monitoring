<?php

require "./connection.php";

if ( isset($_POST["delete"]) )
{
    $key = $_POST["id-delete"];
    $SQL = "DELETE FROM projects WHERE id = $key";

    $query_results = mysqli_query($conn, $SQL);

    if ( !mysqli_error($conn) ) {
        header ("Location: ../index.php?res=1");
    } else {
        header("Location: ../index.php?res=0");
    }
}


?>
