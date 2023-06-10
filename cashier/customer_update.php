<?php
include '../conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "ID tidak ditemukan.";
    exit;
}

if (isset($_POST['submit'])) {
    $name = $_POST['name_customer'];
    $email = $_POST['email_customer'];
    $address = $_POST['address_customer'];

    $query = "UPDATE customer SET name_customer='$name',email_customer='$email',address_customer='$address' WHERE id_customer=$id";

    if ($conn->query($query) === TRUE) {
        echo "Data berhasil diupdate.";
        echo '<br><br><a href="customer.php">Lihat Data</a>';
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

$query = "SELECT * FROM customer WHERE id_customer=$id";
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
    <title>Update customer</title>
    <link rel="stylesheet" href="../src/css/editproduct.css">
</head>

<body>
    <div class="kotak_login">
    <h1 class="title">Update customer</h1>
    <form class="form" method="POST" action="">
        <label>
            <input type="hidden" name="id" class="input" value="<?php echo $data['id_customer']; ?>">
            <span>Id customer</span>
        </label>
        <label for="name">
            <input type="text" name="name_customer" class="input" value="<?php echo $data['name_customer']; ?>">
            <span>Name</span>
        </label>
        <label for="name">
            <input type="text" name="email_customer" class="input" value="<?php echo $data['email_customer']; ?>">
            <span>Email</span>
        </label>
        <label for="name">
            <input type="text" name="address_customer" class="input" value="<?php echo $data['address_customer']; ?>">
            <span>Address</span>
        </label>
        <button class="submit" type="submit" name="submit">Submit</button>

    </form>
    </div>
</body>
</html>