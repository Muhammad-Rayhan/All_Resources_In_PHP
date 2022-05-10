<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Select</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: gray;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-10 mb-3 px-0">
                <div class="d-flex justify-content-between">
                    <h3 class="text-light">View Data on Databases</h3>
                    <a href="00_Data_Insert.php" class="text-light bg-danger btn btn-danger px-3">Go To Insert</a>
                </div>
            </div>
            <div class="col-10 border border-success rounded bg-light">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Product ID</th>
                            <th scope="col">Product List</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Delivery Date</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ==============================PHP Start============================== -->
                        <?php
                        //Database Connection
                        $connect = mysqli_connect("localhost", "root", "", "database");

                        //Data Select Code Start
                        //Data Select/View on Database
                        $dataselect = "SELECT * FROM customer_info";
                        //Query Operation
                        $query = mysqli_query($connect, $dataselect);

                        //To Show/View Data Array Format (mysqli_fetch_assoc();)
                        while ($data = mysqli_fetch_assoc($query)) {  //Select All Data From Database Useing While Loop
                            $sl_number = $data['serial_number'];  //$data['serial_number(Data_Table_Feild_Name)']
                            $c_name = $data['customer_name'];
                            $p_id = $data['product_id'];
                            $p_list = $data['product_list'];
                            $p_price = $data['product_price'];
                            $d_date = $data['delivery_date'];
                        ?>

                            <tr>
                                <th scope="row"><?php echo $sl_number; ?></th>
                                <td><?php echo $c_name; ?></td>
                                <td><?php echo $p_id; ?></td>
                                <td><?php echo $p_list; ?></td>
                                <td><?php echo $p_price; ?></td>
                                <td><?php echo $d_date; ?></td>
                                <td>
                                    <a href="02_Data_Update.php?editid=<?php echo $sl_number; ?>" class="text-decoration-none text-light"><span class="px-4 btn btn-success">Edit</span></a>
                                    <a href="?deleteid=<?php echo $sl_number; ?>" class="text-decoration-none text-light"><span class="px-3 btn btn-danger">Delete</span></a>
                                </td>
                            </tr>

                        <?php
                        }
                        //Data Select Code End
                        ?>
                        <!-- ==============================PHP End============================== -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>


<?php
//Database Connection
$connect = mysqli_connect("localhost", "root", "", "database");

//Data Delete Code Start
if (isset($_GET['deleteid'])) {
    //Catch ID
    $getid = $_GET['deleteid'];  //$_GET['deleteid(Catch_deleteid_From_01_Data_Select ?"deleteid")']

    //Delete Query
    $delete = "DELETE FROM customer_info WHERE serial_number=$getid";  //WHERE serial_number(Data_Table_Field_Name)=$getid(Our_Catch_ID_Variable_Name)

    //Query Connection Inside IF Connection
    if (mysqli_query($connect, $delete) == TRUE) {
        //header('Location:01_Data_Select.php');
        header("Refresh:0; url=01_Data_Select.php");  //One Page Reload & Data Delete.
    }
}
//Data Delete Code End
?>