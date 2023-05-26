<?php
include 'conn.php';
$id_produk = $_POST['id_produk'];

//jika keranjang sisa 1, maka maka hilangkan 1
if ($_SESSION['keranjang'][$id_produk]==1)
{
    unset($_SESSION['keranjang'][$id_produk]);
}
else
{
    $_SESSION['keranjang'][$id_produk]-=1;
}
?>