<?php

    include '../conn.php';

    $query = "DELETE FROM product WHERE id_product = '".$_GET["id_product"]."'";
    if (mysqli_query($conn,$query)){
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'index.php?page=product';
            </script> 
    ";
    }else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'index.php?page=product';
            </script> 
    ";

    }
    mysqli_close($conn);
?>
