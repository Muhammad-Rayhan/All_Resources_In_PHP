<?php
//Database Connection
$connect = mysqli_connect('localhost', 'root', '', 'database');

// Data Insert Code Start
if (isset($_REQUEST['submit'])) {
    $customerName = $_REQUEST['cname'];  //$_REQUEST['cname(Input_Name_Value)']
    $productId = $_REQUEST['pid'];
    $productList = $_REQUEST['select'];
    $productPrice = $_REQUEST['pprice'];
    $delivaryDate = $_REQUEST['ddate'];

    //Data Insert
    $datainsert = "INSERT INTO customer_info(customer_name, product_id, product_list, product_price, delivery_date) VALUES ('$customerName', '$productId', '$productList', '$productPrice', '$delivaryDate')";
    //Query Operation
    $query = mysqli_query($connect, $datainsert);

    //Data Insert Chack
    if (!$query) {
        echo "Insert Failed!";
    } else {
        // header('location:00_Data_Insert.php');
    }
}
// Data Insert Code End
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
                    <form action="00_Data_Insert.php" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    Customer Name : <input type="text" name="cname" class="form-control">
                                </div>
                                <div class="form-group">
                                    Product ID : <input type="text" name="pid" class="form-control" value="#">
                                </div>
                                <div class="form-group">
                                    Product List :<br>
                                    <select class="form-select py-2" id="" name="select" style="width:100%; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; appearance: none; border-radius: .25rem;">
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
                                            Product Price : <input type="text" name="pprice" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            Delivery Date : <input type="date" name="ddate" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-4 mb-2 d-flex justify-content-center">
                                    <input type="submit" name="submit" class="btn btn-primary px-5 me-1" value="Insert">
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