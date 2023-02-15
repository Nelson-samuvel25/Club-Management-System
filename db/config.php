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
    
    // code for creating table for clubDetails
    $createTable = "CREATE TABLE IF NOT EXISTS clubDetails (id INT PRIMARY KEY auto_increment,clubName VARCHAR(255), clubDesciption text, file text);";

    if(!(query($createTable))){
        echo "clubDetails Table not created";
        return;
    }else{
            echo "clubDetails Table Created Successfully";
    }
     
    
    $createTable = " CREATE TABLE IF NOT EXISTS `clubRegistration` (`id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(50) NOT NULL,`rollNumber` varchar(20) NOT NULL,`emailId` varchar(100) NOT NULL,`phoneNumber` varchar(10) NOT NULL,`department` varchar(55) NOT NULL,`year` varchar(10) NOT NULL,`club` varchar(10) NOT NULL,`position` varchar(20) NOT NULL,`gender` enum('Male', 'Female') NOT NULL,`time` timestamp DEFAULT CURRENT_TIMESTAMP,PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
      
      if(query($createTable)){
        echo "clubregistration table created successfully";
      }else{
        echo "clubregistration table not created";
      }
    
    
    $createTable = "CREATE TABLE IF NOT EXISTS `users` (`id` int(11) NOT NULL AUTO_INCREMENT, `rollNumber` varchar(20) NOT NULL,`emailId` varchar(255) NOT NULL,`time` timestamp DEFAULT CURRENT_TIMESTAMP,PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

    if(query($createTable)){
      echo "clubregistration table created successfully";
    }else{
      echo "clubregistration table not created";
    }
?>