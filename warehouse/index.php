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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link href="../src/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">$MALL CASHIER</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search"
            aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3 text-white" href="index.php?page=logout">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white bg-light sidebar collapse shadow">
                <div class="my-3 text-center">
                    <h6><?php echo $_SESSION['user']['name_user']; ?></h6>
                </div>
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
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

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                        <span>Reports</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=detail_sales">
                                Sales Report
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
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