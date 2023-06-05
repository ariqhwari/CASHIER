<div class="my-3 card border-0 shadow">
    <div class="card-header bg-danger text-white">PRODUCT</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id product</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM product";
            $result = mysqli_query($conn, $query);
            ?>
            <?php while ($data = mysqli_fetch_array($result)) : ?>
            <tbody>
                <tr>
                    <td>
                        <?php echo $data['id_product']; ?>
                    </td>
                    <td>
                        <?php echo $data['name_product']; ?>
                    </td>
                    <td>
                        <?php echo number_format($data['price_product']); ?>
                    </td>
                    <td>
                        <?php echo $data['quantity_product']; ?>
                    </td>
                    <td>
                        <?php echo "<a href='product_edit.php?id=" . $data['id_product'] . "' class='btn btn-danger'>Update</a>"; ?>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</div>