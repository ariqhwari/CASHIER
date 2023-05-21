<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormInsertUser</title>
</head>
<body>
    <h2>User</h2>
            <table>
                    <form action = "InsertUser.php" method = "POST">
                        <tr>
                            <td>
                                <label for = "name_user">
                                    Username :
                                </label>
                            </td>
                            <td>
                                <input type = "text" name = "name_user"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "email_user">
                                    Email :
                                </label>
                            </td>
                            <td>
                                <input type = "email" name = "email_user"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "password_user">
                                    Password :
                                </label>
                            </td>
                            <td>
                                <input type = "password" name = "password_user"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "type_user">
                                        Type :
                                </label>
                            </td>
                            <td>
                                <select name = "type_user">
                                    <option value="">Choose Type</option>
                                    <option value="kasir">cashier</option>
                                    <option value="gudang">warehouse</option>
                                </select>
                        </tr>
            </table>
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