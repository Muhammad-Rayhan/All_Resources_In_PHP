<?php
    include "MySQL_Object-Oriented_connect.php";  //At first include database connect in this file.

    $deleteQuery = "DELETE FROM data_table WHERE id=3";  //"DELETE FROM our_created_data_table_name WHERE id=3(id_number)"

    // ==================================NOTE=====================================>
    // Note: Always input ID = ID_number like (id = 3), Because if we just give only ID number then all the data will be deleted. So always input id = id_number (id=3).
    // ==================================NOTE=====================================>

    //Object-Oriented Query Connection
    $result = mysqli_query($conn, $deleteQuery);  //Insert query operation into a variable. & mysqli_query($our_connect_variable_name, $our_deleteQuery_variable_name)

    //If you need to show data delete successfully or not. Than you need to run if condition like-
    if ($result) {
        echo "Delete Successfull.";
    } else {
        echo "Error";
    }
?>