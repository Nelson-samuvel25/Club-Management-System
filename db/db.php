<?php

    $servername = 'localhost';
    $username = 'root';
    $password = 'arun@1234';
    $dbname = 'club_management_system';
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    if(!$connection){
        die("Database not connected");
    }
    // function for executing query and returning the data
    function query($query){
        global $connection;
        $queryExecution = mysqli_query($connection, $query);
        return $queryExecution;
    }


    // query to fetch the data from the option table
    $sql = "SELECT * FROM options";
    $optionQuery = query($sql);

    // function to get the options from the option
    function optionQuery($optionType){
        global $optionQuery;
        $optionQuery = $optionQuery -> fetch_all(MYSQLI_ASSOC);
        $$optionType = array_filter($optionQuery, function($row) use ($optionType){
            return $row["optionType"] == $optionType;
        });
        return $$optionType;
    }
?>