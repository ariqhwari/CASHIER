<?php

if (isset($_POST['submit'])) {
    $product = $_POST['name_product'];
    $price = $_POST['price_product'];
    $quantity = $_POST['quantity_product'];
    $id_category = $_POST['id_category'];
    $information_product = $_POST['information_product'];
    $photo_product = $_FILES['fileToUpload']['name'];

    $query = "INSERT INTO product (name_product, price_product, quantity_product, id_category, information_product, photo_product) VALUES ('$product', '$price', '$quantity', '$id_category', '$information_product', '$photo_product')";

    $target_dir = "../src/img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    if ($conn->query($query) === TRUE) {
        echo "
        <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'index.php?page=product';
        </script> 
";
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
                    <th>Id category</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Information</th>
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
                            <?php echo $data['id_category']; ?>
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
                            <?php echo $data['information_product']; ?>
                        </td>
                        <td>
                            <?php echo "<a href='product_edit.php?id=" . $data['id_product'] . "' class='btn btn-danger'>Update</a>"; ?>
                            <?php echo "<a href='product_delete.php?id_product=" . $data['id_product'] . "' class='btn btn-danger'>Delete</a>"; ?>
                        </td>
                    </tr>
                <?php endwhile ?>
                </tbody>
                <td style="border: none;"><a href='product_form.php' class="btn btn-danger">Add Product</a></td>
        </table>
    </div>
</div>