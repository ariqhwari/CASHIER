<?php
    include '../conn.php';

    $query = "DELETE FROM customer WHERE id_customer = '".$_GET["id_customer"]."'";
    if (mysqli_query($conn,$query)){
        echo "delete success";
    }else {
        echo "error". mysqli_error($conn);

    }
    mysqli_close($conn);
?>

<?php include 'customer.php' ?>
