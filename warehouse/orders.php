<div class="contents">
    <div class="content-tittle">ORDER</div>
    <div class="content-dashboard">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id sales</th>
                    <th>Order Date</th>
                    <th>Name Customer</th>
                    <th>Total</th>
                    <th>Option</th>
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
                        <?php echo date("d M Y H:i", strtotime($data['order_date']) + 5*3600); ?>
                    </td>
                    <td>
                        <?php echo ($data['name_customer']) ?>
                    </td>
                    <td>
                        <?php echo number_format($data['total']) ?>
                    </td>
                    <td>
                        <a href="index.php?page=detail_sales&id=<?php echo $data['id_sales'] ?>"
                            class="btn btn-danger">Detail</a>
                        <?php echo "<a href='detail_sales_delete.php?id_sales=" .$data['id_sales']. "' class='btn btn-danger'>Delete</a>";?>
                        <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                    </td>
                </tr>
                <?php $key++; ?>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</div>