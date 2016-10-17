<!DOCTYPE html>
<html>
<head>
        <?php
            include 'links.php';
        ?>
</head>
<body background="images/image.jpg">


<?php

include 'connect.php';

$brand_id = $_GET['idhere'];

$sql = "DELETE FROM specifications WHERE id=$brand_id";

$result = $conn->query($sql);



    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
 ?>


</body>
</html>
