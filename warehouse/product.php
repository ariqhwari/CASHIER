<div class="my-3 card border-0 shadow">
    <div class="card-header bg-danger text-white">Produk</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id product</th>
                    <th>product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Opsi</th>
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
                        <?php echo $data['price_product']; ?>
                    </td>
                    <td>
                        <?php echo $data['quantity_product']; ?>
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