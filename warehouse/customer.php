<div class="contents">
    <div class="content-tittle">Customer</div>
    <div class="content-dashboard">
        <table class="table">
            <thead>
                <tr>
                    <th>Id Customer</th>
                    <th>Name Customer</th>
                    <th>E-mail Customer</th>
                    <th>Address Customer</th>
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
                    </tr>
                <?php endwhile ?>
                </tbody>
        </table>
    </div>
</div>