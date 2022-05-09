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
                <form action="" method="post">
                    <div class="row">
                        <!-- ==================================================================================================== -->
                        <?php
                            include 'database.php';

                            $id = $_REQUEST['id'];

                            $selectquery = "select * from registration where id=$id";
                            $query = mysqli_query($conn, $selectquery);

                            $result = mysqli_fetch_assoc($query);

                            if(isset($_REQUEST['submit'])) {

                                $id = $_REQUEST['id'];

                                $name = $_REQUEST['name'];
                                $number = $_REQUEST['number'];
                                $refer = $_REQUEST['refer'];
                                $qualification = $_REQUEST['qualification'];
                                $email = $_REQUEST['email'];
                                $language = $_REQUEST['language'];

                                // $insertquery = "INSERT INTO registration(name, number, refer, qualification, email, language) VALUES ('$name', '$number', '$refer', '$qualification', '$email', '$language')";

                                $updatequery = "UPDATE registration SET id=$id, name ='$name', number ='$number', refer ='$refer', qualification ='$qualification', email ='$email', language ='$language' WHERE id=$id";

                                $query = mysqli_query($conn, $updatequery);

                                if($query) {
                                ?>
                                <script>
                                    alert("Updated Successfull");
                                </script>
                                <?php
                                } else {
                                    ?>
                                    <script>
                                        alert("Updated Unsuccessfull");
                                    </script>
                                    <?php
                                }
                            }
                            
                        ?>
                        <!-- ==================================================================================================== -->
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Enter your name *" value="<?php echo $result['name']; ?>">
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="number" class="form-control" placeholder="Mobile number *" value="<?php echo $result['number']; ?>">
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="refer" class="form-control" placeholder="Any references *" value="<?php echo $result['refer']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <input type="text" name="qualification" class="form-control" placeholder="Enter your qualification *" value="<?php echo $result['qualification']; ?>">
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email id *" value="<?php echo $result['email']; ?>">
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="language" class="form-control" placeholder="Prefered language *" value="<?php echo $result['language']; ?>">
                            </div>
                            <div>
                                <input type="submit" name="submit" value="Update" class="btn btn-primary px-4">
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

