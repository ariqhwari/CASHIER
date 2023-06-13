<?php
    include '../conn.php';

    $query = "DELETE FROM sales WHERE id_sales = '".$_GET["id_sales"]."'";
    if (mysqli_query($conn,$query)){
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'index.php?page=orders';
            </script> 
    ";
    }else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'index.php?page=orders';
            </script> 
    ";

    }
    mysqli_close($conn);
?>

