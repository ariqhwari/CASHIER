<!DOCTYPE html>
<html>
<head>
    <title>Tambah Product</title>
</head>
<body>
    <h1>Tambah Product</h1>
    <form method="POST" action="product.php">
        <table>
                
                <tr>
                    <td><label for="product">Product </label></td>
                    <td><input type="text" name="name_product"></td>
                </tr>
                <tr>
                    <td><label for="price">Price </label></td>
                    <td><input type="text" name="price_product"></td>
                </tr>
                <tr>
                    <td><label for="quantity">Quantity </label></td>
                    <td><input type="text" name="quantity_product"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Add"></td>
                </tr>
            </table>
    </form>
    <br><br><?php echo "<a href='product.php'>Lihat Data</a>";?>
</body>
</html>
