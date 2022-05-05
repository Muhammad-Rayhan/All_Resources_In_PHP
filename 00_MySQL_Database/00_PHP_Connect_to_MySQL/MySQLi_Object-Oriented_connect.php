<!--=========================First methdo to create MySQL connection=========================-->

<?php
    // Note: At first create a database & Input the database name in $dbname"........."

    $serverName = "localhost";  //By default local $serverName = "localhost"
    $userName = "root";  //By default user $userName = "root"
    $password = "";  //By default password is $password = "" (blank) 
    $dbName = "Enter_your_database_name";  //Enter your database name like $dbName = "my_database"
    
    //Create Connection
    $conn = new mysqli($serverName, $userName, $password, $dbName);  //Enter $servername $username $password $dbname (declear variable) for connection.
    
    // Check Connection
    if ($conn) {  //Enter if condition to connection variable like ($conn)
        ?>
            <script>
                alert ("Connection Successfull.");
            </script>
        <?php
    } else {
        ?>
            <script>
                alert ("Connection Error!");
            </script>
        <?php
    }
    ?>


<!--=========================Second methdo to create MySQL connection=========================-->

<?php
    // Note: At first create a database & Input the database name in $dbname"........."

    $serverName = "localhost";  //By default local server name "localhost"
    $userName = "root"; //By default user name "root"
    $password = ""; //By default password is blank 
    $dbName = "Enter_your_database_name";   //Enter your database name like "my_database"

    //Create Connection
    $conn = new mysqli($serverName, $userName, $password, $dbName);  //Enter $servername $username $password $dbname (declear variable) for connection.

    // Check Connection
    if ($conn->connect_error) {
        die ("Connection failed: " . $conn->connect_error);
    }
    echo "Connected Successfully";
?>