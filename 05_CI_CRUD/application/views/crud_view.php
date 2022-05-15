<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <h1 class="text-center bg-secondary text-light py-4 fw-bolder">CRUD CI APP</h2>
        <div class="container">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <h2>All Products</h2>
                        <a href="" class="btn btn-primary fw-bolder d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Product</a>
                    </div>
                    <hr>

                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Price</th>
                                <th scope="col">Product Quantity</th>
                                <th scope="col">Actions</th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($product_details as $product) : ?>
                                <!--Foreach loop start-->
                                <tr>
                                    <td><?= $product->id ?></td>
                                    <!--$product->Data_table_feild_name.-->
                                    <td><?= $product->product_name ?></td>
                                    <td><?= $product->product_price ?></td>
                                    <td><?= $product->product_quantity ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>crud/editProduct/<?php echo $product->id; ?>" class="btn btn-success">Edit</a>
                                        <a href="<?= base_url(); ?>crud/deleteProduct/<?= $product->id; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <!--Foreach loop End-->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ======================================= -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="<?= base_url(); ?>crud/addProduct" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="name" class="fw-bolder">Product Name</label>
                                <input type="text" name="name" placeholder="Enter your product name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="price" class="fw-bolder">Product Price</label>
                                <input type="text" name="price" placeholder="Enter your product price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantity" class="fw-bolder">Product Quantity</label>
                                <input type="text" name="quantity" placeholder="Enter your product quantity" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" name="insert" value="Save Product" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ======================================= -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>