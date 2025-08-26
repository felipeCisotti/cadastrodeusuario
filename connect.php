<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "segundobanco";

    $connect = mysqli_connect($server, $user, $pass, $db);

   if (mysqli_connect_errno()) {
    echo "Error". mysqli_connect_error();
    exit();
   }

?>