<?php
include '../conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "ID tidak ditemukan.";
    exit;
}

if (isset($_POST['submit'])) {
    $name = $_POST['name_category'];

    $query = "UPDATE category SET name_category='$name' WHERE id_category=$id";

    if ($conn->query($query) === TRUE) {
        echo "Data berhasil diupdate.";
        echo '<br><br><a href="category.php">Lihat Data</a>';
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

$query = "SELECT * FROM category WHERE id_category=$id";
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
    <title>Update Category</title>
    <link rel="stylesheet" href="../src/css/editproduct.css">
</head>

<body>
    <h1 class="title">Update Category</h1>
    <form class="form" method="POST" action="">
        <label>
            <input type="hidden" name="id" class="input" value="<?php echo $data['id_category']; ?>">
            <span>Id Category</span>
        </label>
        <label for="name">
            <input type="text" name="name_category" class="input" value="<?php echo $data['name_category']; ?>">
            <span>Name Category</span>
        </label>
        <button class="submit" type="submit" name="submit">Submit</button>

        <!-- <table>
            <input type="hidden" name="id" value="<?php echo $data['id_category']; ?>">
            <tr>
                <td><label for="name_category">Category Name </label></td>
                <td><input type="text" name="name_category" value="<?php echo $data['name_category']; ?>"><br></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table> -->
    </form>
</body>
</html>
