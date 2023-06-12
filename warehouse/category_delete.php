<?php

    include '../conn.php';

    $query = "DELETE FROM category WHERE id_category = '".$_GET["id_category"]."'";
    if (mysqli_query($conn,$query)){
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'index.php?page=category';
            </script> 
    ";
    }else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'index.php?page=category';
            </script> 
    ";

    }
    mysqli_close($conn);
?>
