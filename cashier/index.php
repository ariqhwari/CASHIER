<?php include 'header.php';
?>

<div class="container">
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
            } elseif ($_GET['page'] == 'user') {
                include 'user.php';
            } elseif ($_GET['page'] == 'logout') {
                include 'logout.php';
            }
        }
        ?>
    </main>
</div>
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'tampilkeranjang.php',
            success: function(hasil) {
                $(".content2").html(hasil);
            }
        })
    })
</script>

<script>
    $(document).ready(function() {
        $(".link-product").on("click", function() {
            var id_product = $(this).attr("idnya");
            $.ajax({
                type: 'post',
                url: 'masukkankeranjang.php',
                data: 'id_product=' + id_product,
                success: function(hasil) {
                    $.ajax({
                        url: 'tampilkeranjang.php',
                        success: function(hasil) {
                            $(".content2").html(hasil);
                        }
                    })
                }
            })
        })
    });
</script>

<script>
    $(document).ready(function() {
        $(document).on("click", ".tambahi", function() {
            var id_product = $(this).attr("idnya");
            $.ajax({
                type: 'post',
                url: 'tambahkeranjang.php',
                data: 'id_product=' + id_product,
                success: function(hasil) {
                    $.ajax({
                        url: 'tampilkeranjang.php',
                        success: function(hasil) {
                            $(".content2").html(hasil);
                        }
                    })
                }
            })
        })
    });
</script>

<script>
    $(document).ready(function() {
        $(document).on("click", ".kurangi", function() {
            var id_product = $(this).attr("idnya");
            $.ajax({
                type: 'post',
                url: 'kurangikeranjang.php',
                data: 'id_product=' + id_product,
                success: function(hasil) {
                    $.ajax({
                        url: 'tampilkeranjang.php',
                        success: function(hasil) {
                            $(".content2").html(hasil);
                        }
                    })
                }
            })
        })
    });
</script>

<?php include 'footer.php' ?>