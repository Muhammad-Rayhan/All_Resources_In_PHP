<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "curd_design";

    $conn = mysqli_connect($server, $user, $password, $db);

    if($conn) {
        ?>
        <script>
            alert("Connection Successfull");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Connection Unsuccessfull");
        </script>
        <?php
    }
?>