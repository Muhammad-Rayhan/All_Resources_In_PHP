<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">List of Candidates For Web Developer Job</h2>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Number</th>
                            <th scope="col">Reference</th>
                            <th scope="col">Qualification</th>
                            <th scope="col">Email</th>
                            <th scope="col">Language</th>
                            <th colspan="2" scope="col">Edit & Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'database.php';
                            $selectquery = "select * from registration";
                            $query = mysqli_query($conn, $selectquery);
                            while($result = mysqli_fetch_assoc($query)){
                        ?>
                            <tr>
                                <td><?php echo $result['id']; ?></td>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['number']; ?></td>
                                <td><?php echo $result['refer']; ?></td>
                                <td><?php echo $result['qualification']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $result['language']; ?></td>
                                <td><a href="update.php?id=<?php echo $result['id']; ?>"><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
                                <td><a href="delete.php?ids=<?php echo $result['id']; ?>"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
