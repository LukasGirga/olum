<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "olum1");

    $mysqli=new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error){
        echo 'sorry nothing ' . $mysqli->connect_error;
        exit();
    }

    mysqli_query($mysqli, "INSERT INTO clients (vardas, email, numeris, message) VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[numeris]', '$_POST[message]')");
?>