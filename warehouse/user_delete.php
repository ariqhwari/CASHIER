<?php
    include '../conn.php';

    $query = "DELETE FROM user WHERE id_user = '".$_GET["id_user"]."'";
    if (mysqli_query($conn,$query)){
        echo "delete success";
    }else {
        echo "error". mysqli_error($conn);

    }
    mysqli_close($conn);
?>