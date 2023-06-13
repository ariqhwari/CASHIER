<?php
include '../conn.php';

$id_customer = isset($_POST['id_customer']) ? $_POST['id_customer'] : null;
$id_user = 1;
$id_sales = '';
$total = isset($_POST['total']) ? $_POST['total'] : null;
$order_date = date("Y-m-d H:i");

$ambil = $conn->query("SELECT * FROM customer WHERE id_customer='$id_customer'");
$customer = $ambil->fetch_assoc();

echo "<pre>";
print_r($_SESSION['keranjang']);
print_r($_POST);
print_r($customer);
print_r($id_customer);
echo "</pre>";

// Simpan data Penjualan
$query = "INSERT INTO sales(id_customer, id_user, order_date, total)
        VALUES ('$id_customer', '$id_user', '$order_date', '$total')";
if ($conn->query($query) === TRUE) {
    echo "Data berhasil ditambahkan.";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}




// Simpan Detail Penjualan
if (isset($_SESSION['keranjang'])) {
    foreach ($_SESSION['keranjang'] as $id_product => $jumlah) {
        $run = $conn->query("SELECT * FROM product WHERE id_product='$id_product'");
        $product = $run->fetch_assoc();
        $product['jumlah'] = $jumlah;
        $keranjang[] = $product;
        $sub_total = $product['price_product'] * $jumlah;
        $query3 = "SELECT * FROM sales WHERE total=$total";
        $result = mysqli_query($conn, $query3);
        while ($data = mysqli_fetch_array($result)) {
            $query2 = "INSERT INTO detail_sales(id_sales, id_product, quantity, sub_total)
                    VALUES ('{$data['id_sales']}', '$id_product', '$jumlah', '$sub_total')";
            if ($conn->query($query2) === TRUE) {
                echo "Data berhasil ditambahkan.";
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
        }
    }
}
