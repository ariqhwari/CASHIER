<?php include '../conn.php'; ?>

<?php

if (isset($_POST['submit'])) {
    $name_user = $_POST["name_user"];
    $email_user = $_POST["email_user"];
    $password_user = sha1($_POST["password_user"]);
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

<div class="contents">
    <div class="content-tittle">My Profile</div>
    <div class="content-dashboard">
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
            $detail = $_SESSION['user']['id_user']; 
            $query = "SELECT * FROM user WHERE id_user = '$detail' ";
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
                        <?php echo "<a  href='user_update.php?id=".$data['id_user']."' class='btn btn-danger'>Update</a>"; ?>
                         <!-- "<a href='user_delete.php?id_user=" .$data['id_user']. "' class='btn btn-danger'>Delete</a>"; -->
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</div>
