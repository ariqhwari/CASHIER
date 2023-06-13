<div class="content-list">
    <div class="content1">
        <div class="letak-produk"></div>
        <?php
        $query = "SELECT * FROM product";
        $result = mysqli_query($conn, $query);
        while ($data = mysqli_fetch_array($result)) : ?>
            <div class="product">
                <a href="#" class="link-product" idnya="<?php echo $data['id_product']; ?>" style="text-decoration: none;">
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