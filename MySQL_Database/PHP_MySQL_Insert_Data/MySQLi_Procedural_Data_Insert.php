<?php
    include "MySQL_Procedural_connect.php";  //At first include database connect in this file.

    $insertQuery = "INSERT INTO data_base_name (name, email, password) VALUES ('Rayhan', 'rayhan.cse2k17@gmail.com', 'rayhan1998')";  //"INSERT INTO our_created_database_name (Our_created_Data_table_field_name) VALUES ('Insert_data-table_value inside single cotation')";
    
    //Procedural Query Operation
    $result = mysqli_query($conn, $insertQuery);  //Insert query operation into a variable. & mysqli_query($our_connect_variable_name, $our_insertQuery_variable_name)



    //=========================First method to check data insert successfull or not.========================>
    /*If you need to chack data insert successfully or not. Than you need to run if condition like,
    
        if ($result) {                          //($result = our created variable)
            echo "Data insert Successfull.";
        } else {
            echo "Unsuccessfull!";
        }
    
    */



    //=========================Second method to check data insert successfull or not.========================>
    /*If you need to chack data insert successfully or not. Than you need to run if condition like,
    
        if ($result) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    
    */
?>