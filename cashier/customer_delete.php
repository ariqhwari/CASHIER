<?php
    include '../conn.php';

    $query = "DELETE FROM customer WHERE id_customer = '".$_GET["id_customer"]."'";
    if (mysqli_query($conn,$query)){
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'customer.php';
            </script> 
    ";
    }else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'customer.php';
            </script> 
    ";

    }
    mysqli_close($conn);
?>

