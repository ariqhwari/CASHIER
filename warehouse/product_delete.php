<?php
include '../conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "ID tidak ditemukan.";
    exit;
}

$query = "DELETE FROM product WHERE id_product=$id";

if ($conn->query($query) === TRUE) {
    echo "Data berhasil dihapus.";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
echo '<br><br><a href="product.php">Lihat Data</a>';

$conn->close();
