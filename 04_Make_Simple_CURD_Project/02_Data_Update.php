<?php
    //Database Connection
    $connect = mysqli_connect("localhost", "root", "", "database");

    //Data Delete Code Start
    if (isset($_GET['editid'])) {



        //Catch ID
        $getid2 = $_GET['editid'];  //$_GET['editid(Catch_deleteid_From_01_Data_Select ?"editid")']

        //Select Data From Catching Id For Data Update
        $select = "SELECT * FROM customer_info WHERE serial_number=$getid2";  //WHERE serial_number(Data_Table_Field_Name)=$getid2(Our_Catch_ID_Variable_Name)

        //Query Operation
        $query = mysqli_query($connect, $select);

        //Data Catching By Array
        $data = mysqli_fetch_assoc($query);





        // Update Code Start

            // Copying Data Insert Code For Data Update Start
            if (isset($_REQUEST['submit'])) {
                $customerName = $_REQUEST['cname'];  //$_REQUEST['cname(Input_Name_Value)']
                $productId = $_REQUEST['pid'];
                $productList = $_REQUEST['select'];
                $productPrice = $_REQUEST['pprice'];
                $delivaryDate = $_REQUEST['ddate'];

                //Data Update
                $update = "UPDATE customer_info SET customer_name='$customerName', product_id='$productId', product_list='$productList', product_price='$productPrice', delivery_date='$delivaryDate' WHERE serial_number=$getid2";  //SET customer_name(Data_Table_Feild_Name)='$customerName(Our_Created_Variable_Name)'  [NOTE: Must Use WHERE serial_number(Data_Table_Field_Name)=$getid2(Our_Catch_ID_Variable_Name)]

                //Query Operation
                $query = mysqli_query($connect, $update);

                //Data Insert Chack
                if ($query = mysqli_query($connect, $update) == TRUE) {
                    header('Location:01_Data_Select.php');
                }
            }
            // Copying Data Insert Code For Data Update End
            
        // Update Code End
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: gray;
        }

        .p-center {
            width: 60%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="p-center">
            <h3 class="text-center text-light mb-3">Insert Your Data</h3>
            <div class="row justify-content-evenly">
                <div class="col-6 border border-success rounded bg-light">
                    <!-- Form Start -->
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    Customer Name : <input type="text" name="cname" class="form-control" value="<?php echo $data['customer_name']; ?>">  <!--=======================$data['customer_name(Data_Table_Feild_Name)']=======================-->
                                </div>
                                <div class="form-group">
                                    Product ID : <input type="text" name="pid" class="form-control" value="<?php echo $data['product_id']; ?>">
                                </div>
                                <div class="form-group">
                                    Product List :<br>
                                    <select class="form-select py-2" value="<?php echo $data['product_list']; ?>" name="select" style="width:100%; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; appearance: none; border-radius: .25rem;">
                                        <option value="" selected>---Select Product---</option>
                                        <option value="Rice">Rice</option>
                                        <option value="Oil">Oil</option>
                                        <option value="Vagetable">Vagetable</option>
                                        <option value="Apple">Apple</option>
                                        <option value="Pulse">Pulse</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            Product Price : <input type="text" name="pprice" class="form-control" value="<?php echo $data['product_price']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            Delivery Date : <input type="date" name="ddate" class="form-control" value="<?php echo $data['delivery_date']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-4 mb-2 d-flex justify-content-center">
                                    <input type="submit" name="submit" class="btn btn-primary px-5 me-1" value="Update">
                                    <a href="01_Data_Select.php" class="btn btn-success ms-1" style="padding-right: 1.8rem !important; padding-left: 1.8rem !important;">Show Data</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- From End -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>