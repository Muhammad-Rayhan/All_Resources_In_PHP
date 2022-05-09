<?php
    include 'database.php';

    $id = $_REQUEST['ids'];

    $deletequery = "DELETE FROM registration WHERE id = $id";

    $query = mysqli_query($conn, $deletequery);

    //Chack Connection
    if($query) {
        ?>
        <script>
            alert("Deleted Successfull");
        </script>
        <?php
        header('location:select.php');
    } else {
        ?>
        <script>
            alert("Deleted Unsuccessfull");
        </script>
        <?php
    }
?>