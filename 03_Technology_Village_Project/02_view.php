<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container border border-success my-3">
        <h2 class="text-center fw-bold mt-3">Student Information</h2>
        <table class="table table-striped mt-3 pt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Address</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Mother Name</th>
                    <th scope="col">Total Due</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "database");

                //Select Query
                $select = "SELECT * FROM school_management";
                //Query Operation
                $query = mysqli_query($conn, $select);

                //Array
                while ($data = mysqli_fetch_assoc($query)) {
                    $sl_number = $data['serial_number'];  //$data['serial_number(Data_table_feild_name)']
                    $student_name = $data['student_name'];
                    $student_id = $data['student_id'];
                    $student_address = $data['student_address'];
                    $father_name = $data['father_name'];
                    $mother_name = $data['mother_name'];
                    $subtotaldue = $data['due'];
                ?>
                    <tr>
                        <td><?php echo $sl_number; ?></td>
                        <td><?php echo $student_name; ?></td>
                        <td><?php echo $student_id; ?></td>
                        <td><?php echo $student_address; ?></td>
                        <td><?php echo $father_name; ?></td>
                        <td><?php echo $mother_name; ?></td>
                        <td><?php echo $subtotaldue; ?></td>
                        <td>
                            <span class="btn btn-success">
                                <a class="text-light text-decoration-none" href="03_edit.php?editid=<?php echo $sl_number; ?>">Edit</a>
                            </span>
                            <span class="btn btn-danger">
                                <a class="text-light text-decoration-none" href="02_view.php?deleteid=<?php echo $sl_number; ?>">Delete</a>
                                <!--When Remove "02_view.php" than warning is not show-->
                                <!--Warning: Cannot modify header information - headers already sent by (output started at F:\xampp\htdocs\Technology_village\02_view.php:54) in F:\xampp\htdocs\Technology_village\02_view.php on line 89-->
                            </span>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "database");
// ==============================================Delete============================================
if (isset($_GET['deleteid'])) {

    //Catch id
    $deleteid = $_GET['deleteid'];
    //Delete Query
    $delete = "DELETE FROM school_management WHERE serial_number=$deleteid";  //WHERE serial_number(Data_Table_ID_Feild_Name)=$deleteid(Catch_id_variable_name)

    //Query Operation
    $deletequery = mysqli_query($conn, $delete);

    if ($deletequery == TRUE) {
        header('location:02_view.php');
    } else {
        echo "Delete Failed";
    }
}
// ==============================================Delete============================================
?>