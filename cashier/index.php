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
    </div>
</div>
</div>

<script>
    $(document).ready(function(){
        $(document).on("click", ".tambahi", function(){
            var id_product = $(this).attr("idnya");
            alert(id_product);
        })
    })
</script>

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
