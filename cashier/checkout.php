<?php
include '../conn.php';

echo "<pre>";
print_r($_POST);
print_r($_SESSION['keranjang']);
echo "</pre>";

$

// $id_customer = isset($_POST['id_customer']) ? $_POST['id_customer'] : null;
// $id_user = isset($_POST['id_user']) ? $_POST['id_user'] : null;
// $id_sales = isset($_POST['id_sales']) ? $_POST['id_sales'] : null;
// $total = isset($_POST['total']) ? $_POST['total'] : null;
// $order_date = date("Y-m-d H:i");
// $email = isset($_POST['email']) ? $_POST['email'] : null;

// // If email is empty
// if (empty($email)) {
//     $id_customer = null;
// } else {
//     // Check the customer table
//     $ambil = $conn->query("SELECT * FROM customer WHERE email_customer='$email'");
//     $customer = $ambil->fetch_assoc();

//     if (empty($customer)) {
//         $conn->query("INSERT INTO customer (email_customer) VALUES ('$email')");
//         $id_customer = $conn->insert_id;
//     } else {
//         $id_customer = $customer['id_customer'];
//     }
// }

// // Save sales
// $conn->query("INSERT INTO sales(id_sales, id_customer, id_user, order_date, total)VALUES ('$id_sales', '$id_customer', '$id_user', '$order_date', '$total')");

// // Get id_sales
// $id_sales = $conn->insert_id;

// // Save product_sales
// foreach ($_SESSION['keranjang'] ?? [] as $id_product => $jumlah) {
//     $ambil = $conn->query("SELECT * FROM product WHERE id_product='$id_product'");
//     $product = $ambil->fetch_assoc();
//     $id_product = $product['id_product'];
//     $name_product = $product['name_product'];
//     $id_category = $product['id_category'];
//     $price_product = $product['price_product'];
//     $quantity_product = $product['quantity_product'];
//     $photo_product = $product['photo_product'];
//     $information_product = $product['information_product'];

//     $conn->query("INSERT INTO sales_product (id_product, name_product, id_category, price_product, quantity_product, photo_product, information_product)
//     VALUES ('$id_product', '$name_product', '$id_category', '$price_product', '$quantity_product', '$photo_product', '$information_product')") or die(mysqli_error($conn));
//     //kurangi stok produk
//     $conn->query("UPDATE product SET quantity_product=quantity_product-$price_product WHERE id_product='$id_product'");
// }

// //kosongkan keranjang
// unset($_SESSION['keranjang']);
?>

<!-- // //larikan ke halaman nota
// <script> -->
<!-- //     location = 'nota.php?id=$id_sales'
// </script> -->