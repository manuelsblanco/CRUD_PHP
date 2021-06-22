<!--Me conecto a la DBA-->
<?php include("db.php");?>
<!--Me conecto a la DBA-->


<!--Borro el ID-->
<?php

    $id = $_GET['id'];

    $query = "DELETE FROM personas WHERE id=$id";
    $result = mysqli_query($conn,$query);


    header("Location: index.php");

?>


<!--Borro el ID-->

