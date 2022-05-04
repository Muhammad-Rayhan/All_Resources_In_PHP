<?php
    include "MySQL_Object-Oriented_connect.php";  //At first include database connect in this file.

    $insertQuery = "INSERT INTO data_table_name (name, email, password) VALUES ('Rayhan', 'rayhan.cse2k17@gmail.com', 'rayhan1998')";  //"INSERT INTO our_created_datatable_name (Our_created_Data_table_field_name) VALUES ('Insert_data-table_value inside single cotation')";
    
    //Object-oriented Query Operation
    $result = $conn->query($insertQuery);  //Insert query operation into a variable. & $our_connect_variable_name->query($our_insertQuery_variable_name);



    //=========================First method to check data insert successfull or not.========================>
    /*If you need to chack data insert successfully or not. Than you need to run if condition like,
    
        if ($result === TRUE) {                          //($result = our created variable)
            echo "Data insert Successfull.";
        } else {
            echo "Unsuccessfull!";
        }
    
    */



    //=========================Second method to check data insert successfull or not.========================>
    /*If you need to chack data insert successfully or not. Than you need to run if condition like,
    
        if ($conn->query($result) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    
    */
?>