<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $connection = new mysqli($servername, $username, $password);
    if (!$connection) {
        die("Connection failed: " . $conn->connect_error);
    }
    $create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
    if(!(mysqli_query($connection, $create_db))){
        echo "Database Connection failed";
        return;
    }
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    // code for creating table for clubDetails
    $createTable = "CREATE TABLE IF NOT EXISTS clubDetails (id INT PRIMARY KEY auto_increment,clubName VARCHAR(255), clubDesciption text, file text);";

    if(!(mysqli_query($connection, $createTable))){
        echo "clubDetails Table not created";
        return;
    }else{
            echo "clubDetails Table Created Successfully";
    }
        


?>