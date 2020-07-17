<?php
    $serverName = "db4free.net";
    $userName = "mmonimukpanah";
    $password = "fanatica6442";
    $dbName = "response_data";

    $connection = mysqli_connect($serverName,$userName,$password,$dbName);

    if(!$connection){
        echo "Unable to connect db.";
    }

    // $serverName = "localhost";
    // $userName = "root";
    // $password = "";
    // $dbName = "response_data";

    // $connection = mysqli_connect($serverName,$userName,$password,$dbName);

    // if(!$connection){
    //     echo "Unable to connect db.";
    // }



?>

        

