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
        <div class="row">
            <div class="col-12">
                <div class="mb-3 mt-3 d-flex justify-content-between">
                    <h3>Apply For Company Placement</h3>
                    <a href="select.php" class="btn btn-primary rounded-pill">Chack Form</a>
                </div>
            </div>
            <div class="col-12">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Enter your name *">
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="number" class="form-control" placeholder="Mobile number *">
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="refer" class="form-control" placeholder="Any references *">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <input type="text" name="qualification" class="form-control" placeholder="Enter your qualification *">
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email id *">
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="language" class="form-control" placeholder="Prefered language *">
                            </div>
                            <div>
                                <input type="submit" name="submit" value="Register" class="btn btn-primary px-4">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>

<?php
include 'database.php';
if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $number = $_REQUEST['number'];
    $refer = $_REQUEST['refer'];
    $qualification = $_REQUEST['qualification'];
    $email = $_REQUEST['email'];
    $language = $_REQUEST['language'];

    $insertquery = "INSERT INTO registration(name, number, refer, qualification, email, language) VALUES ('$name', '$number', '$refer', '$qualification', '$email', '$language')";

    $query = mysqli_query($conn, $insertquery);

    if ($query) {
?>
        <script>
            alert("Insert Successfull");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Insert Unsuccessfull");
        </script>
<?php
    }
}

?>