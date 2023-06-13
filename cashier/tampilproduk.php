<?php
include '../conn.php';
$product = array();
$ambil = $conn->query("SELECT * FROM product WHERE id_product='$id_product' ORDER BY id_product DESC LIMIT 20");
while($tiap = $ambil-> fetch_assoc())
{
    $product[] = $tiap;
}

//echo "<pre>";
//print_r($product);
//echo "</pre>";

?>
<div class="row">
            <?php foreach ($product as $key => $value): ?>
            <div class="col-md-3">
                <a href="#" class="link-product" idnya="<?php echo $data['id_product']; ?>"
                    style="text-decoration: none;">
                    <img src="../src/img/<?php echo $data['photo_product']; ?>" alt="">
                    <h6><?php echo $data['name_product']; ?></h6>
                    <span><?php echo number_format($data['price_product']); ?></span>
                </a>
            </div>
            <?php endforeach; ?>  
</div>