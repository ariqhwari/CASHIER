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

        <form method="POST" action="customer.php">
            
            <label for="name_customer">Name </label>
            <input type="text" name="name_customer" class="form_login" placeholder="Customer Name">

            <label for="email_customer">Email </label>
            <input type="text" name="email_customer" class="form_login" placeholder="Customer Email">

            <label for="address_customer">Address </label>
            <input type="text" name="address_customer" class="form_login" placeholder="Customer Address">

            <input type="submit" name="submit" value="Add" class="tombol_login">
        </form>
        
        <center><?php echo "<a href='customer.php'>Lihat Data</a>";?></center>
    </div>
    
</body>
</html>
