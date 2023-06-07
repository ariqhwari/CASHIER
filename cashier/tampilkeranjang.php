<?php
include '../conn.php';

$keranjang = array();
$total = 0;
if (isset($_SESSION['keranjang'])) {
    foreach ($_SESSION['keranjang'] as $id_product => $jumlah) {
        $ambil = $conn->query("SELECT * FROM product WHERE id_product='$id_product'");
        $product = $ambil->fetch_assoc();
        $product['jumlah'] = $jumlah;
        $keranjang[] = $product;
        $total += $product['price_product'] * $jumlah;
    }
}
?>

<?php foreach ($keranjang as $key => $data) : ?>
    <div class="row">
        <div class="col-md-9">
        <h6><?php echo $data['name_product']; ?></h6>
        <span class="small text-muted"><?php echo number_format($data['price_product'])?></span>
        <p class="small">X <?php echo $data['jumlah']?></p>
    </div>
    <div class="col-md-3">
        <div>
            <i class="bi bi-plus tambahi" idnya="<?php echo $data['id_product']?>"></i>
        </div>  
        <div>
          <i class="bi bi-dash kurangi" idnya="<?php echo $data['id_product']?>" ></i>
        </div>
    </div>>
</div>

<?php endforeach ?>

<form method="post">
    <div class="mb-3">
        <label>Total</label>
        <input type="number" name="total" class="input" value="<?php echo $total ?>" readonly>
    </div>
    <div class="mb-3"></div>
        <label>Bayar</label>
        <input type="number" name="total" class="form-control" value="<?php echo $total ?>" readonly >
    </div>
      <button class="btn btn-primary btn-sm">Checkout</button>
    
</form>

<style>
    .total {
        margin-top: 20px;
        border-top: 1px solid #ccc;
    }

    .coolinput {
        display: flex;
        flex-direction: column;
        width: 100%;
        position: static;
        max-width: 345px;
    }

    .coolinput label.text {
        font-size: 0.75rem;
        color: #dc3545;
        font-weight: 700;
        position: relative;
        top: 0.5rem;
        margin: 0 0 0 7px;
        padding: 0 3px;
        background: #ffff;
        width: fit-content;
    }

    .coolinput input[type=number].input {
        padding: 11px 10px;
        font-size: 0.75rem;
        border: 2px #dc3545 solid;
        border-radius: 5px;
        background: #ffff;
    }

    .coolinput input[type=number].input:focus {
        outline: none;
    }
</style>