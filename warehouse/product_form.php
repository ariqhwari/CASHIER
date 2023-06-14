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

        <form method="POST" action="index.php?page=product" enctype="multipart/form-data">
            
            <label for="product">Product </label>
            <input type="text" name="name_product" class="form_login" placeholder="Product Name">

            <label for="price">Price </label>
            <input type="text" name="price_product" class="form_login" placeholder="Price Product">

            <label for="id_category">Id Category </label>
            <select name = "id_category">
            <option value=>Choose one</option>
            <?php
                $query = "SELECT id_category, name_category FROM category";
                $result = $conn->query($query);
                while ($obj = $result->fetch_object()){
                    echo "<option value= $obj->id_category>$obj->id_category - $obj->name_category</option>";
                 }
            ?>
            </select>
            <br /><br />

            <label for="quantity">Quantity </label>
            <input type="text" name="quantity_product" class="form_login" placeholder="Quantity Product">

            <label for="information_product">Product Information </label>
            <input type="text" name="information_product" class="form_login" placeholder="Information Product">

            <input type="file" name="fileToUpload" id="fileToUpload">

            <input type="submit" name="submit" value="Add" class="tombol_login">
            <input type = "reset" value = "Reset" class="tombol_login"/>

        </form>
        
        <center><?php echo "<a href='index.php?page=product'>Show Data</a>";?></center>
    </div>
    
</body>
</html>
