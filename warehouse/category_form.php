<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormInsertCategory</title>
</head>
<body>
    <h2>Category</h2>
            <table>
                    <form action = "category.php" method = "POST">
                        <tr>
                            <td>
                                <label for = "name_category">
                                    Category name :
                                </label>
                            </td>
                            <td>
                                <input type = "text" name = "name_category"/>
                            </td>
                        </tr>
                    <p></p>
                        <tr>
                            <td>
                                <input type="submit" name="submit" value="Submit">   
                                <input type = "reset" value = "Reset"/>
                            </td>
                        </tr>
                    </form>
</body>
</html>