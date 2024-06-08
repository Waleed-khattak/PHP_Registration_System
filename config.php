<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_register";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if(!$conn){
        echo "Could not connect to database";
    }
?>