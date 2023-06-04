<?php include 'conn.php'; ?>

<?php

if (isset($_POST['submit'])) {
    $name_user = $_POST["name_user"];
    $email_user = $_POST["email_user"];
    $password_user= $_POST["password_user"];
    $type_user = $_POST["type_user"];

    $query = "INSERT INTO user (name_user, email_user, password_user,type_user) VALUES ('$name_user', '$email_user', '$password_user', '$type_user')";

    if ($conn->query($query) === TRUE) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// $conn->close();
?>

<div class="my-3 card border-0 shadow">
    <div class="card-header bg-danger text-white">USER</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id User</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM user";
            $result = mysqli_query($conn, $query);
            ?>
            <?php while ($data = mysqli_fetch_array($result)) : ?>
            <tbody>
                <tr>
                    <td>
                        <?php echo $data['id_user']; ?>
                    </td>
                    <td>
                        <?php echo $data['name_user']; ?>
                    </td>
                    <td>
                        <?php echo $data['email_user']; ?>
                    </td>
                    <td>
                        <?php echo $data['type_user']; ?>
                    </td>
                    <td>
                        <?php echo "<a  href='user_update.php?id=".$data['id_user']."'>Update</a>"; ?>
                        <?php echo "<a href='user_delete.php?id=".$data['id_user']."'>Delete</a>";?>
                        <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        <tr>
            <td><br><br><?php echo "<a href='user_form.php'>Tambahkan Data</a>";?></td>
        </tr>
    </div>
</div>
