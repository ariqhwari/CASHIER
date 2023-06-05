<div class="my-3 card border-0 shadow">
    <div class="card-header bg-danger text-white">DETAIL SALES</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id Detail Sales</th>
                    <th>Id Sales</th>
                    <th>Id Product</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM detail_sales";
            $result = mysqli_query($conn, $query);
            ?>
            <?php while ($data = mysqli_fetch_array($result)) : ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $data['id_detail_sales']; ?>
                        </td>
                        <td>
                            <?php echo $data['id_sales']; ?>
                        </td>
                        <td>
                            <?php echo $data['id_product']; ?>
                        </td>
                        <td>
                            <?php echo $data['quantity']; ?>
                        </td>
                    </tr>
                <?php endwhile ?>
                </tbody>
        </table>
    </div>
</div>