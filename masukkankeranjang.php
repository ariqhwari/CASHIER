<?php
include 'conn.php';
$id_produk = $_POST['id_produk'];

//jika keranjang belum ada id_product, maka jumlahnya default(1)
if (!isset($_SESSION['keranjang'][$id_produk]))
{
    $_SESSION['keranjang'][$id_produk]=1;
}
else
{
    $_SESSION['keranjang'][$id_produk] +=1;
}
?>