<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormInsertCategory</title>
    <link rel="stylesheet" href="../src/css/form.css"/>
</head>

<body>
    <div class="kotak_login">
        <p class="tulisan_login" style="color:#7D1A1A"><b>Category</b></p>
        <form action = "index.php?page=category" method = "POST">

            <label for="name_category">Category Name </label>
            <input type="text" name="name_category" class="form_login" placeholder="Category Name">

            <input type="submit" name="submit" value="Add" class="tombol_login">   
            <input type = "reset" value = "Reset" class="tombol_login"/>
        </form>
        
        <center><?php echo "<a href='index.php?page=category'>Show Data</a>";?></center>
    </div>
</body>
</html>