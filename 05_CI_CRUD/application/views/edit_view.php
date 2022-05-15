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
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5">
            <div class="col-5 border py-3">
                <form action="<?= base_url()?>crud/update/<?= $singleProduct->id ?>" method="post">
                    <div class="form-group mb-3">
                        <label for="name" class="fw-bolder">Product ID</label>
                        <input type="text" name="name" placeholder="" class="form-control" value="<?= $singleProduct->id ;?>">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="name" class="fw-bolder">Product Name</label>
                        <input type="text" name="name" placeholder="" class="form-control" value="<?= $singleProduct->product_name ;?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="price" class="fw-bolder">Product Price</label>
                        <input type="text" name="price" placeholder="" class="form-control" value="<?= $singleProduct->product_price ;?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="quantity" class="fw-bolder">Product Quantity</label>
                        <input type="text" name="quantity" placeholder="" class="form-control" value="<?= $singleProduct->product_quantity ;?>">
                    </div>
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <input type="submit" name="insert" value="Update" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>