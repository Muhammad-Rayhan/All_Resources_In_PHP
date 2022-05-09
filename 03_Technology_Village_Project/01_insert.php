<?php
    include '00_connect.php';

    if(isset($_POST['submit'])){
        $st_name = $_POST['name'];  //$_POST['name(input_name_value)']
        $st_id = $_POST['stid'];
        $st_address = $_POST['address'];
        $father_name = $_POST['fname'];
        $mother_name = $_POST['mname'];
        $total_due = $_POST['due'];

        //Insert Query
        $insert = "INSERT INTO school_management(student_name, student_id, student_address, father_name, mother_name, due) VALUES ('$st_name', '$st_id', '$st_address', '$father_name', '$mother_name', '$total_due')";
        //Query Operation
        $query = mysqli_query($conn, $insert);

        if(!$query){
            echo "Not insert.";
        } else{
            echo "Insert Successfully";
            header('location:01_insert.php');
        }
    }
?>

<form action="01_insert.php" method="post">
    Name: <input type="text" name="name"><br><br>
    Student ID: <input type="text" name="stid"><br><br>
    Address: <input type="text" name="address"><br><br>
    Father Name: <input type="text" name="fname"><br><br>
    Mother Name: <input type="text" name="mname"><br><br>
    Due: <input type="text" name="due"><br><br>
    <input type="submit" name="submit" value="Insert">
</form>