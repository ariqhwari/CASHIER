<div class="my-3 card border-0 shadow">
    <div class="card-header bg-danger text-white">SALES</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id Sales</th>
                    <th>Id Customer</th>
                    <th>Id User</th>
                    <th>Order Date</th>
                    <th>Total</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM sales";
            $result = mysqli_query($conn, $query);
            ?>
            <?php while ($data = mysqli_fetch_array($result)) : ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $data['id_sales']; ?>
                        </td>
                        <td>
                            <?php echo $data['id_customer']; ?>
                        </td>
                        <td>
                            <?php echo $data['id_user']; ?>
                        </td>
                        <td>
                            <?php echo $data['order_date']; ?>
                        </td>
                        <td>
                            <?php echo $data['total']; ?>
                        </td>
                    </tr>
                <?php endwhile ?>
                </tbody>
        </table>
    </div>
</div>