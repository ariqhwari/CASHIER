<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormInsertCustomer</title>
</head>
<body>
    <h2>Customer</h2>
            <table>
                    <form action = "InsertCustomer.php" method = "POST">
                        <tr>
                            <td>
                                <label for = "name_customer">
                                    Name :
                                </label>
                            </td>
                            <td>
                                <input type = "text" name = "name_customer"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "email_customer">
                                    Email :
                                </label>
                            </td>
                            <td>
                                <input type = "email" name = "email_customer"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "address_customer">
                                    Address :
                                </label>
                            </td>
                            <td>
                                <input type = "text" name = "address_customer"/>
                            </td>
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