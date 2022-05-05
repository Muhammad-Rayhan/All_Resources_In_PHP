<?php
    include "MySQL_Object-Oriented_connect.php";  //At first include database connect in this file.

    $selectQuery = "SELECT * FROM data_table";  //"SELECT * FORM our_created_data_table_name";   (note: * = all data from datatable)

    //Object Oriented Query Connection
    $result = $conn->query($selectQuery);  //Insert query operation into a variable. & $our_connect_variable_name->query($our_selectQuery_variable_name);

    // If you need to show data select successfully. Than you need to run if condition,

    if ($result) {
        //Note: mysqli_fetch_assoc() function make our data Associative Arrays.

        while ($data = mysqli_fetch_assoc($result)) {  //When show all data form data table than declear while loop.

            // $data = mysqli_fetch_assoc($result);  //When declear only mysqli_fetch_assoc($result) with out loop. Than display show only one row data.

            echo $data['id'] . "<br>";  //Display data from call our data table field name.
            echo $data['name'] . "<br>";  //Display data from call our data table field name.
            echo $data['email'] . "<br>";  //Display data from call our data table field name.
            echo $data['password'] . "<br>";  //Display data from call our data table field name. 
            $orderid = $data['orderid'];  //Display data from call our data table field name.
            $delivaryTime = $data['delivarytime'];  //Display data from call our data table field name.
            $picupTime = $data['picuptime'];  //Display data from call our data table field name.

            echo $orderid . "<br>";
            echo $delivaryTime . "<br>";
            echo $picupTime . "<br>";
            echo "<br><br><br>";
        }
    }
?>