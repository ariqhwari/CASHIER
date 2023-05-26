<?php
include 'conn.php';
$id_product = $_POST['id_product'];

//jika keranjang sisa 1, maka maka hilangkan 1
if ($_SESSION['keranjang'][$id_product]==1)
{
    unset($_SESSION['keranjang'][$id_product]);
}
else
{
    $_SESSION['keranjang'][$id_product]-=1;
}
?>
