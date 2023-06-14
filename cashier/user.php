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


<?php include 'header.php' ?>



<div class="user">
    <div class="card">
        <?php
        $detail = $_SESSION['user']['id_user'];
        $query = "SELECT * FROM user WHERE id_user = '$detail' ";
        $result = mysqli_query($conn, $query);
        ?>
        <?php while ($data = mysqli_fetch_array($result)) : ?>
        <div class="card-photo"></div>
        <div class="card-title"><?php echo $data['name_user']; ?><br>
            <span><?php echo $data['email_user']; ?></span>
            <span><br><?php echo $data['type_user']; ?></span>
        </div>
        <div class="card-socials">
            <?php echo "<a  href='user_update.php?id=" . $data['id_user'] . "' class='btn btn-danger'>Update</a>"; ?>
            <?php endwhile; ?>
        </div>
    </div>
</div>