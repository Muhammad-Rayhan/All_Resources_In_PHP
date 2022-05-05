<?php
    // Note: At first Create a database & Input the database name in $dbName = "....."

    $serverName = "localhost";  //By default local $serverName = "localhost"
    $userName = "root"; //By default user $userName = "root"
    $password = "";  //By default password $password = "" (blank)
    $dbName = "Enter_your_database_name"; //Enter your database name like $dbName = "my_database"

    try {
        //Create connection
        $conn = new PDO("mysql:host=$servername;dbname=myDB", $userName, $password);  //At first enter mysql:host=$serverName (Those we created) myDB = "Enter Your database name" & Enter $username & $password variable those we created. 

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>