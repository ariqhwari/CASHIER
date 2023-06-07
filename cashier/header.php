<?php include '../conn.php';
//jika tidak ada session user maka ke login
if (!isset($_SESSION['user'])) {
    echo "<script>alert('Anda harus login!')</script>";
    echo "<script>location='../index.php'</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cashier</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Geologica&family=Lora:ital,wght@0,500;1,400&family=Poppins:wght@300;600&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../src/css/index-cashier.css">
    <link rel="icon" href="../src/img/logo.png">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>

<body>
    <nav>
        <a class="tittle" href="#">$MALL CASHIER</a>
        <div class="listnav">
            <button class="nav-home" onclick="location.href='index.php'">
                <p>Home</p>
            </button>
            <button class="nav-customer" onclick="location.href='index.php?page=customer'">
                <p>Customer</p>
            </button>
            <button class="nav-orders" onclick="location.href='index.php?page=orders'">
                <p>Orders</p>
            </button>
            <button class="nav-report" onclick="location.href='index.php?page=detail_sales'">
                <p>Report</p>
            </button>
            <button class="nav-logout" onclick="location.href='logout.php'">
                <p>Logout</p>
            </button>
        </div>
    </nav>