<?php
    // Note: At first Create a database & Input the database name in $dbName = "....."

    $serverName = "localhost";  //By default local $serverName = "localhost"
    $userName = "root"; //By default user $userName = "root"
    $password = "";  //By default password $password = "" (blank)
    $dbName = "Enter_your_database_name"; //Enter your database name like $dbName = "my_database"

    // Create connection
    $conn = mysqli_connect($serverName, $userName, $password, $dbName);  //Enter $servername $username $password $dbname (declear variable) for connection.
    
    //Check connection
    if (!$conn) {  //Enter if condition (!$conn) not connect than print die function.
        die ("Connection Failed" . mysqli_connect_error());
    }
    echo "Connected Successfull";
?>