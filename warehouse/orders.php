<div class="my-3 card border-0 shadow">
    <div class="card-header bg-danger text-white">Customers</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id sales</th>
                    <th>Order Date</th>
                    <th>Name Customer</th>
                    <th>Total</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM sales LEFT JOIN customer ON sales.id_customer = customer.id_customer;";
            $result = mysqli_query($conn, $query);
            ?>
            <?php
            $key = 1;
            while ($data = mysqli_fetch_array($result)) : ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $key; ?>
                        </td>
                        <td>
                            <?php echo $data['id_sales']; ?>
                        </td>
                        <td>
                            <?php echo date("d M Y H:i", strtotime($data['order_date'])); ?>
                        </td>
                        <td>
                            <?php echo ($data['name_customer']) ?>
                        </td>
                        <td>
                            <?php echo number_format($data['total']) ?>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger">Detail</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php $key++; ?>
                <?php endwhile ?>
                </tbody>
        </table>
    </div>
</div>