<?php
    include '../conn.php';

    $query = "DELETE FROM product WHERE id_product = '".$_GET["id_product"]."'";
    if (mysqli_query($conn,$query)){
        // echo "delete success";
    }else {
        echo "error". mysqli_error($conn);

    }
    mysqli_close($conn);
?>
<?php
// include 'index.php'
// include 'index.php?page=product'
?>