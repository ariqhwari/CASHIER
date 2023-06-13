<?php
include '../conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "ID tidak ditemukan.";
    exit;
}

if (isset($_POST['submit'])) {
    $name = $_POST['name_user'];
    $email = $_POST['email_user'];

    $query = "UPDATE user SET name_user='$name',email_user='$email' WHERE id_user=$id";

    if ($conn->query($query) === TRUE) {
        echo "
        <script>
            alert('Update berhasil');
            document.location.href = 'user.php';
        </script> 
    ";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

$query = "SELECT * FROM user WHERE id_user=$id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan.";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update User</title>
    <link rel="stylesheet" href="../src/css/editproduct.css">
</head>

<body>
    <div class="kotak_login">
        <h1 class="title">Update User</h1>
        <form class="form" method="POST" action="">
            <label>
                <input type="hidden" name="id" class="input" value="<?php echo $data['id_user']; ?>">
                <span>Id User</span>
            </label>
            <label for="name">
                <input type="text" name="name_user" class="input" value="<?php echo $data['name_user']; ?>">
                <span>Name</span>
            </label>
            <label for="name">
                <input type="text" name="email_user" class="input" value="<?php echo $data['email_user']; ?>">
                <span>Email</span>
            </label>
            <button class="submit" type="submit" name="submit">Submit</button>

        </form>
    </div>
</body>

</html>