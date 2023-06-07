<div class="contents">
    <div class="content-tittle">CATEGORY</div>
    <div class="content-dashboard">
        <table class="table">
            <thead>
                <tr>
                    <th>Id Category</th>
                    <th>Category</th>
                    <th>Edit</th>
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
        <a href="form_category_warehouse.php" class="btn btn-danger">Add Category</a>
    </div>
</div>