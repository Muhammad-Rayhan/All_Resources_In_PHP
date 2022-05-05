<?php
    include "MySQL_Object-Oriented_connect.php";  //At first include database connect in this file.

    $updateQuery = "UPDATE data_table SET name='Rayhan', email='rayhan.cse2k17@gmail.com', password='rayhan.4774' WHERE id=5";  //"UPDATE our_created_data_table_name SET table_feild_name='input_value' WHERE id=5(id_number)";

    // ==================================NOTE=====================================>
    // Note: Always input ID = ID_number like (id = 3), Because if we just give only ID number then all the data will be update in this value. So always input id = id_number (id=3).
    // ==================================NOTE=====================================>

    //Object-Oriented Query Connection
    $result = $conn->query($updateQuery);  //Insert query operation into a variable. & $our_connect_variable_name->query($our_updateQuery_variable_name);

    //If you need to show data update successfully or not. Than you need to run if condition like-
    if ($result) {
        echo "Update Successfull.";
    } else {
        echo "Error";
    }
?>