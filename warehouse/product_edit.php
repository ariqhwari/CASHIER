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
</head>
<body>
    <h1>Edit Product</h1>
    <form method="POST" action="">
        <table>
            <input type="hidden" name="id" value="<?php echo $data['id_product']; ?>">
            <tr>
                <td><label for="product">Product </label></td>
                <td><input type="text" name="name_product" value="<?php echo $data['name_product']; ?>"><br></td>
            </tr>
            <tr>
                <td><label for="price">Price </label></td>
                <td><input type="text" name="price_product" value="<?php echo $data['price_product']; ?>"><br></td>
            </tr>
            <tr>
                <td><label for="quantity">Quantity </label></td>
                <td><input type="text" name="quantity_product" value="<?php echo $data['quantity_product']; ?>"><br></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
