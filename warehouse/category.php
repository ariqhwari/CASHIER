<?php
            if(isset($_POST['submit'])){
                // $link = 
                $name_category = $_POST["name_category"];
                
                $insert = "INSERT INTO category (name_category) VALUES ('$name_category')";
                $result = $conn->query($insert);

                if ($result === TRUE) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $insert . "<br>" . $conn->error;
                  }
            }
            // if($result == TRUE){
            //     echo "<h2>insert data SUCCESS</h2>";
            //     // echo "<a href = \"$link\">show data</a>";
            // }
?>
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
                        <?php echo "<a href='category_update.php?id=" . $data['id_category'] . "' class='btn btn-danger'>Update</a>"; ?>
                        <?php echo "<a href='category_delete.php?id_category=" .$data['id_category']. "' class='btn btn-danger'>Delete</a>";?>
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        <br><br><?php echo "<a href='category_form.php' >Add Category</a>"; ?>
    </div>
</div>