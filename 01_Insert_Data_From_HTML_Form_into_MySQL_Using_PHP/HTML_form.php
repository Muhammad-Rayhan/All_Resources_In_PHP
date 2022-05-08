<!-- ===================First method Object_Oriented insert data from html form into mysql database=================== -->

<?php

    include '../connection/conn/Object_Oriented_Connection.php';  //At first make sure your connection setup is successfull in this page.

    if (isset($_POST['sname']) && isset($_POST['stid']) && isset($_POST['pnumber']) && isset($_POST['class']) && isset($_POST['address'])) {

        //When input any value in form & click submit button than if condition will start.
        //NOTE: Submitting any value except blank value will insert it.

        $studentname = $_POST['sname'];  //$_POST($_super_global_variable)['sname (our_created_input_name_value)'];
        $studentid = $_POST['stid'];
        $phonenumber = $_POST['pnumber'];
        $class = $_POST['class'];
        $address = $_POST['address'];

        //Data insert query
        $insertQuery = "INSERT INTO school_management(studentName, studentID, phoneNumber, class, address) VALUES ('$studentname', '$studentid', '$phonenumber', '$class', '$address')";  //"INSERT INTO our_created_data_table_name(data_table_feild_name) VALUES ($our_created_variable)";

        //Query Operation
        $result = $connection->query($insertQuery); //$our_created_connection_variable->query($our_created_data_insert_variable);

        //Cheack data insert successfully or not.
        if ($result) {  //$result = $our_query_operation_variable
            echo "Insert";
        } else {
            echo "Failed";
        }
    }
?>

<!-- ===================Second method Object_Oriented insert data from html form into mysql database=================== -->

<?php

    include '../connection/conn/Object_Oriented_Connection.php';  //At first make sure your connection setup is successfull in this page.

    if (isset($_POST['submit'])) {

        //When input any value in form & click submit button than if condition will start. 
        //NOTE: Submitting any value except null will insert it include 0 value.

        $studentname = $_POST['sname'];  //$_POST($_super_global_variable)['sname (our_created_input_name_value)'];
        $studentid = $_POST['stid'];
        $phonenumber = $_POST['pnumber'];
        $class = $_POST['class'];
        $address = $_POST['address'];

        //Data insert query
        $insertQuery = "INSERT INTO school_management(studentName, studentID, phoneNumber, class, address) VALUES ('$studentname', '$studentid', '$phonenumber', '$class', '$address')";  //"INSERT INTO our_created_data_table_name(data_table_feild_name) VALUES ($our_created_variable)";

        //Query Operation
        $result = $connection->query($insertQuery);  //$our_created_connection_variable->query($our_created_data_insert_variable);

        //Cheack data insert successfully or not.
        if ($result) {  //$result = $our_query_operation_variable
            echo "Insert";
        } else {
            echo "Failed";
        }
    }
?>

<!-- ===================Third method MySQLi Procedural insert data from html form into mysql database=================== -->

<?php

    include '../connection/conn/Mysql_Procedural_Connection.php';  //At first make sure your connection setup is successfull in this page.

    if (isset($_POST['submit'])) {

        //When input any value in form & click submit button than if condition will start. 
        //NOTE: Submitting any value except null will insert it include 0 value.

        $studentname = $_POST['sname'];  //$_POST($_super_global_variable)['sname (our_created_input_name_value)'];
        $studentid = $_POST['stid'];
        $phonenumber = $_POST['pnumber'];
        $class = $_POST['class'];
        $address = $_POST['address'];

        //Data insert query
        $insertQuery = "INSERT INTO school_management(studentName, studentID, phoneNumber, class, address) VALUES ('$studentname', '$studentid', '$phonenumber', '$class', '$address')";  //"INSERT INTO our_created_data_table_name(data_table_feild_name) VALUES ($our_created_variable)";

        //Query Operation
        $result = mysqli_query($connection, $insertQuery);  //mysqli_query($our_created_connection_variable, $our_created_data_insert_variable);

        //Cheack data insert successfully or not.
        if ($result) {  //$result = $our_query_operation_variable
            echo "Insert";
        } else {
            echo "Failed";
        }
    }
?>



<!-- HTML form start hera -->
<form action="HTML_form.php" method="post" style="margin-top: 10px;">  <!--action="HTML_form.php" = (Output show in this page)-->
    Student Name: <input type="text" name="sname"><br><br>
    Student ID : <input type="text" name="stid"><br><br>
    Phone Number : <input type="text" name="pnumber"><br><br>
    Class : <input type="text" name="class"><br><br>
    Address : <input type="text" name="address"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<!-- HTML form end hera -->