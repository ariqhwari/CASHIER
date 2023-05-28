<div class="my-3 card border-0 shadow">
    <div class="card-header bg-danger text-white">KATEGORI</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id Category</th>
                    <th>Category</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM category";
            $result = mysqli_query($conn, $query);
            ?>
            <?php while ($data = mysqli_fetch_array($result)) : ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $data['id_category']; ?>
                        </td>
                        <td>
                            <?php echo $data['name_category']; ?>
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