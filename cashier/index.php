<?php include 'header.php';
?>
<div class="container">
<div class="content-list">
    <div class="content1">
        <?php
        $query = "SELECT * FROM product";
        $result = mysqli_query($conn, $query);
        while ($data = mysqli_fetch_array($result)) : ?>
        <div class="product">
            <a href="#" class="link-product" idnya="<?php echo $data['id_product']; ?>"
                style="text-decoration: none;">
                <img src="../src/img/<?php echo $data['photo_product']; ?>" alt="">
                <h6><?php echo $data['name_product']; ?></h6>
                <span><?php echo number_format($data['price_product']); ?></span>
            </a>
        </div>
        <?php endwhile; ?>
    </div>
    <div class="content2">
        <?php
        echo "<pre>";
        print_r($_SESSION['keranjang']);
        echo "</pre>"; ?>
    </div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form method="post" class="mb-3">
                        <div class="input-group">
                            <input type="text" name="cari" class="form-control input-cari">
                            <button class="btn btn-primary btn-cari">Cari</button>
                        </div>
                    </form>
                    <div class="letak-produk">   
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow">
                    <div class="card-body keranjang"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $.ajax({
        url: 'tampilproduk.php',
        success: function(hasil) {
            $(".letak-produk").html(hasil);
        }
    })
})
</script>
<script>
$(document).ready(function() {
    $.ajax({
        url: 'tampilkeranjang.php',
        success: function(hasil) {
            $("keranjang").html(hasil);
        }
    })
})
</script>
<script>
    $(document).ready(function(){
        $(document).on("click", ".btn-cari", function(){
            e.preventDefault();
            var cari = $(".input-cari").val();
            $.ajax({
                type: 'post',
                url: 'cariproduk.php',
                data: 'cari='+cari,
                success:function(hasil){
                    $(".letak-produk").html(hasil);
                }
            })
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
                        $(".keranjang").html(hasil);
                    }
                })
            }
        })
    })
});
</script>

<script>
$(document).ready(function() {
    $(".link-product").on("click", ".tambahi", function() {
        var id_product = $(this).attr("idnya");
        $.ajax({
            type: 'post',
            url: 'tambahkeranjang.php',
            data: 'id_product=' + id_product,
            success: function(hasil) {
                $.ajax({
                    url: 'tampilkeranjang.php',
                    success: function(hasil) {
                        $("keranjang").html(hasil);
                    }
                })
            }
        })
    })
});
</script>

<script>
$(document).ready(function() {
    $(".link-product").on("click", ".kurangi", function() {
        var id_product = $(this).attr("idnya");
        $.ajax({
            type: 'post',
            url: 'kurangikeranjang.php',
            data: 'id_product=' + id_product,
            success: function(hasil) {
                $.ajax({
                    url: 'tampilkeranjang.php',
                    success: function(hasil) {
                        $("keranjang").html(hasil);
                    }
                })
            }
        })
    })
});
</script>

<script>
    $(document).ready(function){
        $(document).on("click", ".tambahi", function(){
            var id_product = $(this).attr("idnya");
            alert(id_product);
        })
    }
</script>

<?php include 'footer.php' ?>
