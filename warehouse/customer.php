<div class="contents">
    <div class="content-tittle">Customers</div>
    <div class="content-dashboard">
        <table class="table">
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
                            <?php echo $data['address_-customer']; ?>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile ?>
                </tbody>
        </table>
    </div>
</div>