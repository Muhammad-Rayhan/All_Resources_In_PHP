<?php
    include '00_connect.php';
    //Catch id
    $getid = $_GET['editid'];
    //Select Query
    $select = "SELECT * FROM school_management WHERE serial_number=$getid";  //WHERE serial_number(Data_Table_ID_Feild_Name)=$getid(Catch_id_variable_name)
    //Query Operation
    $query = mysqli_query($conn, $select);
    //Array
    $data = mysqli_fetch_assoc($query);

    if (isset($_POST['submit'])) {
        $st_name = $_POST['name'];  //$_POST['name(input_name_value)']
        $st_id = $_POST['stid'];
        $st_address = $_POST['address'];
        $father_name = $_POST['fname'];
        $mother_name = $_POST['mname'];
        $total_due = $_POST['due'];

        //Update Query
        $update = "UPDATE school_management SET student_name='$st_name', student_id='$st_id', student_address='$st_address', father_name='$father_name', mother_name='$mother_name', due='$total_due' WHERE serial_number=$getid";  //student_name(Data_table_field_name)='$st_name(Our_created_variale)'
        //Query Operation
        $query = mysqli_query($conn, $update);

        if($query){
            header('location:02_view.php');
        }
    }
?>

<form action="" method="post">
    Name: <input type="text" name="name" value="<?php echo $data['student_name'];?>"><br><br>
    Student ID: <input type="text" name="stid" value="<?php echo $data['student_id'];?>"><br><br>
    Address: <input type="text" name="address" value="<?php echo $data['student_address'];?>"><br><br>
    Father Name: <input type="text" name="fname" value="<?php echo $data['father_name'];?>"><br><br>
    Mother Name: <input type="text" name="mname" value="<?php echo $data['mother_name'];?>"><br><br>
    Due: <input type="text" name="due" value="<?php echo $data['due'];?>"><br><br>
    <input type="submit" name="submit" value="Insert">
</form>