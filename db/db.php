<?php
    function query($query){
        $servername = 'localhost';
        $username = 'root';
        $password = 'arun@1234';
        $dbname = 'club_management_system';
        $connection = mysqli_connect($servername, $username, $password, $dbname);
        return mysqli_query($connection, $query);
    }
?>