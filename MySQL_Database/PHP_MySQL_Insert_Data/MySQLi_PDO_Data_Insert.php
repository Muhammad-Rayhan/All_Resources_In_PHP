<?php
    include "../pdo_connection.php";  //At first include database connect in this file.

//Full PDO process start (without comment)
    try {
        $insertQuery = "INSERT INTO data_base_name (name, email, password) VALUES ('Rayhan', 'rayhan.cse2k17@gmail.com', 'rayhan1998')";  //"INSERT INTO our_created_database_name (Our_created_Data_table_field_name) VALUES ('Insert_data-table_value inside single cotation')";
        
        //PDO Query Operation
        $result = $conn->exec($insertQuery);  //Insert query operation into a variable. & $our_connect_variable_name->exec($our_insertQuery_variable_name);


        //=========================First method to check data insert successfull or not.========================>
        echo "New record created successfully";
        } catch (PDOException $e) {
            echo $insertQuery . "<br>" . $e->getMessage();
        }
        $conn = null;  //$our_connect_variable = null;
//Full PDO process end (without comment)



        //=========================Second method to check data insert successfull or not.========================>
        /*If you need to chack data insert successfully or not. Than you need to run if condition like,
        
            if ($result) {
                echo "Successfull";
            } else {
                echo "Unsuccessfull";
            }
    
        */
?>
