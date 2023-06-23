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

// echo "<pre>";
// print_r($_SESSION['keranjang']);
// echo "</pre>";
?>



<?php foreach ($keranjang as $key => $data) : ?>
    <div class="row">

        <h6><?php echo $data['name_product']; ?></h6>
        <span><?php echo number_format($data['price_product']) ?> x <?php echo $data['jumlah'] ?><br></span>
        <div?>
            <button class="btn-tambah tambahi" idnya="<?php echo $data['id_product'] ?>">Tambah</button>
            <button class="btn-kurang kurangi" idnya="<?php echo $data['id_product'] ?>">Kurang</button>
    </div>
    </div>

<?php endforeach ?>

<form id="keranjangForm" method="POST" action="checkout.php">
    <div class="total">
        <div class="coolinput">
            <label for="" class="text">Name</label>
            <select id="id_customer" name="id_customer">
                <option value="0">Choose one</option>
                <?php
                $query = "SELECT id_customer, name_customer FROM customer";
                $result = $conn->query($query);
                while ($obj = $result->fetch_object()) {
                    echo "<option value= $obj->id_customer>$obj->id_customer - $obj->name_customer</option>";
                }
                ?>
            </select>
            <!-- <input type="text" name="email" class="input"> -->
            <!-- <label for="" class="text">E-mail</label>
            <input type="text" name="email" class="input"> -->
            <label for="" class="text">Total</label>
            <input type="number" name="total" class="input" value="<?php echo $total ?>" readonly>
        </div>
    </div>
    <button class="btn-danger" name="submit">Checkout</button>
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

<script>
    $("#keranjangForm").submit(function(e) {
        var customerValue = $("#id_customer").val();

        if (customerValue === "0") {
            alert("Pilih Customer Terlebih Dahulu");
            $("#alertBox").html("Pilih customer sebelum checkout");
            $("#alertBox").removeClass('hide');
            e.preventDefault();
            return false;
        }

        // alert("Customer telah dipilih");
        return true;
    });
</script>

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
        margin: 0 0 20px 0;
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

    .coolinput input[type=text].input {
        padding: 11px 10px;
        font-size: 0.75rem;
        border: 2px #dc3545 solid;
        border-radius: 5px;
        background: #ffff;
    }

    .coolinput input[type=text].input:focus {
        outline: none;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .btn-danger:focus {
        outline: none;
    }

    .btn-tambah {
        background-color: #dc3545;
        color: #fff;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-tambah:hover {
        background-color: #c82333;
    }

    .btn-tambah:focus {
        outline: none;
    }

    .btn-kurang {
        background-color: #dc3545;
        color: #fff;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-kurang:hover {
        background-color: #c82333;
    }

    .btn-kurang:focus {
        outline: none;
    }
</style>