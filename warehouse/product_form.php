<?php
include '../conn.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Product</title>
    <link rel="stylesheet" href="../src/css/form.css"/>
</head>

<body >
    <div class="kotak_login">
        <p class="tulisan_login" style="color:#7D1A1A"><b>Product</b></p>

        <form method="POST" action="index.php?page=product">
            
            <label for="product">Product </label>
            <input type="text" name="name_product" class="form_login" placeholder="Product Name">

            <label for="price">Price </label>
            <input type="text" name="price_product" class="form_login" placeholder="Price Product">

            <label for="quantity">Quantity </label>
            <input type="text" name="quantity_product" class="form_login" placeholder="Quantity Product">

            <input type="submit" name="submit" value="Add" class="tombol_login">
        </form>
        
        <center><?php echo "<a href='index.php?page=product'>Lihat Data</a>";?></center>
    </div>
    
</body>
</html>
