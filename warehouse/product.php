<?php
include '../conn.php';

if (isset($_POST['submit'])) {
    $product = $_POST['name_product'];
    $price = $_POST['price_product'];
    $quantity = $_POST['quantity_product'];

    $query = "INSERT INTO product (name_product, price_product, quantity_product) VALUES ('$product', '$price', '$quantity')";

    if ($conn->query($query) === TRUE) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// $conn->close();
?>

<div class="contents">
    <div class="content-tittle">PRODUCT</div>
    <div class="content-dashboard">
        <table class="table">
            <thead>
                <tr>
                    <th>Id product</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM product";
            $result = mysqli_query($conn, $query);
            ?>
            <?php while ($data = mysqli_fetch_array($result)) : ?>
            <tbody>
                <tr>
                    <td>
                        <?php echo $data['id_product']; ?>
                    </td>
                    <td>
                        <?php echo $data['name_product']; ?>
                    </td>
                    <td>
                        <?php echo number_format($data['price_product']); ?>
                    </td>
                    <td>
                        <?php echo $data['quantity_product']; ?>
                    </td>
                    <td>
                        <?php echo "<a href='product_edit.php?id=" . $data['id_product'] . "' class='btn btn-danger'>Update</a>"; ?>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        <tr>
            <td><br><br><?php echo "<a href='product_form.php'>Add Product</a>"; ?></td>
        </tr>
    </div>
</div>