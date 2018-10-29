<?php

    $server = "localhost";
    $uname  = "root";
    $upass  = "";
    $dbname = "inhouse";

    $connection = mysqli_connect($server, $dbname, $upass, $uname);

    if (!$connection) {
        die("Connection Failed: " . mysqli_connect_error());
    }