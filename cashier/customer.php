<?php
    include '../conn.php';
            if($_POST["submit"]=="Submit"){
                // $link = 
                $name_customer = $_POST["name_customer"];
                $email_customer = $_POST["email_customer"];
                $address_customer = $_POST["address_customer"];
                
                $insert = "INSERT INTO customer (name_customer,email_customer,address_customer) VALUES ('$name_customer','$email_customer',' $address_customer')";
                $result = $conn->query($insert);

                if ($result === TRUE) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $insert . "<br>" . $conn->error;
                  }
                  
            }
            // if($result == TRUE){
            //     echo "<h2>insert data SUCCESS</h2>";
            //     // echo "<a href = \"$link\">show data</a>";
            // }

              
?>

<?php include 'header.php' ?>

<div class="container">
    <div class="content-list">
        <div class="content1">
        <table>
        <thead>
                <tr>
                    <th>Id Customer</th>
                    <th>Name Customer</th>
                    <th>E-mail Customer</th>
                    <th>Address Customer</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM customer";
            $result = mysqli_query($conn, $query);
            ?>
            <?php while ($data = mysqli_fetch_array($result)) : ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $data['id_customer']; ?>
                        </td>
                        <td>
                            <?php echo $data['name_customer']; ?>
                        </td>
                        <td>
                            <?php echo $data['email_customer']; ?>
                        </td>
                        <td>
                            <?php echo $data['address_customer']; ?>
                        </td>
                        <td>
                            <a href="customer_update.php" class="btn btn-danger">Update</a>
                            <a href="customer_delete.php" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile ?>
                </tbody>
        </table>
        </div>
</div>
<a href="customer_form.php" class="btn btn-danger">Add Customer</a>