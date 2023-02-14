<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'arun@1234';
    $dbname = 'club_management_system';
    $connection = mysqli_connect($servername, $username, $password);
    if (!$connection) {
        die("Connection failed: " . $conn->connect_error);
    }
    $create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
    if(mysqli_query($connection, $create_db)){
        echo "Database connected successfully";
    }else{
        echo "Database Connection failed";
        return;
    }
    $connection = mysqli_connect($servername, $username, $password, $dbname);
?>