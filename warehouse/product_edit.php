<?php
include '../conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "ID tidak ditemukan.";
    exit;
}

if (isset($_POST['submit'])) {
    $product = $_POST['name_product'];
    $price = $_POST['price_product'];
    $quantity = $_POST['quantity_product'];

    $query = "UPDATE product SET name_product='$product', price_product='$price', quantity_product='$quantity' WHERE id_product=$id";

    if ($conn->query($query) === TRUE) {
        echo "Data berhasil diupdate.";
        echo '<br><br><a href="product.php">Lihat Data</a>';
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

$query = "SELECT * FROM product WHERE id_product=$id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan.";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="../src/css/editproduct.css">
</head>

<body>
    <form class="form" method="POST" action="">
        <p class="title">Edit Product </p>
        <label>
            <input type="hidden" name="id" class="input" value="<?php echo $data['id_product']; ?>">
            <span>Id Product</span>
        </label>

        <label for="product">
            <input type="text" name="name_product" class="input" value="<?php echo $data['name_product']; ?>">
            <span>Name product</span>
        </label>
        <label for="price">
            <input type="text" class="input" name="price_product" value="<?php echo $data['price_product']; ?>">
            <span>Price</span>
        </label>
        <label for="quantity">
            <input type="text" name="quantity_product" class="input" value="<?php echo $data['quantity_product']; ?>">
            <span>Quantity</span>
        </label>
        <button class="submit" type="submit" name="submit">Submit</button>
    </form>
</body>

</html>