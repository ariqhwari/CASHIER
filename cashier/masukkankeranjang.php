<?php
include '../conn.php';
$id_product = $_POST['id_product'];

//jika keranjang belum ada id_product, maka jumlahnya default(1)
if (!isset($_SESSION['keranjang'][$id_product])) {
    $_SESSION['keranjang'][$id_product] = 1;
} else {
    $_SESSION['keranjang'][$id_product] += 1;
}
