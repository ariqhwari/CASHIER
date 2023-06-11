<?php
    include '../conn.php';

    $query = "DELETE FROM category WHERE id_category = '".$_GET["id_category"]."'";
    if (mysqli_query($conn,$query)){
        echo "delete success";
    }else {
        echo "error". mysqli_error($conn);

    }
    mysqli_close($conn);
?>