<?php include '../conn.php';
// jika tidak ada session user maka ke login
if (!isset($_SESSION['user'])) {
    echo "<script>alert('Anda harus login!')</script>";
    echo "<script>location='../index.php'</script>";
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Geologica&family=Lora:ital,wght@0,500;1,400&family=Poppins:wght@300;600&display=swap"
        rel="stylesheet">

    <link href="../src/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header>
        <a class="tittle" href="#">$MALL CASHIER</a>
        <input class="navbar-search" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item">
                <a class="signout" href="index.php?page=logout">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <nav class="sidebarTittle">
                <div class="name-user">
                    <h6><?php echo $_SESSION['user']['name_user']; ?></h6>
                </div>
                <div class="sidebarMenu">
                    <ul class="list-menu">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" name href="index.php">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=category">
                                Category
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=product">
                                Product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=customer">
                                Customer
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=orders">
                                Orders
                            </a>
                        </li>
                    </ul>

                    <h6 class="report">
                        <span>Reports</span>
                    </h6>
                    <ul class="list-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=detail_sales">
                                Sales Report
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="main-content">

                <?php
                if (!isset($_GET['page'])) {
                    include 'dashboard.php';
                } else {
                    if ($_GET['page'] == 'category') {
                        include 'category.php';
                    } elseif ($_GET['page'] == 'product') {
                        include 'product.php';
                    } elseif ($_GET['page'] == 'customer') {
                        include 'customer.php';
                    } elseif ($_GET['page'] == 'orders') {
                        include 'orders.php';
                    } elseif ($_GET['page'] == 'detail_sales') {
                        include 'detail_sales.php';
                    } elseif ($_GET['page'] == 'logout') {
                        include 'logout.php';
                    }
                }
                ?>
            </main>
        </div>
    </div>
    <script src="../src/js/bootstrap.bundle.min.js"></script>
</body>

</html>