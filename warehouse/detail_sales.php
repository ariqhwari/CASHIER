<?php
//mendapatkan id_sales 
$id_sales = $_GET['id'];

//ambil dari tabel sales
$ambil = $conn->query("SELECT * FROM sales
                    LEFT JOIN customer ON sales.id_customer=customer.id_customer
                    WHERE sales.id_sales='$id_sales'");
$sales = $ambil->fetch_assoc();


$product = array();
$ambil = $conn->query("SELECT * FROM detail_sales 
                    LEFT JOIN product on detail_sales.id_product=product.id_product
                    WHERE detail_sales.id_sales='$id_sales'");
while ($tiap = $ambil->fetch_assoc()) {
    $product[] = $tiap;
}

// echo "<pre>";
// print_r($sales);
// print_r($product);
// echo "</pre>";
?>
<div class="contents">
    <div class="content-tittle">Customers</div>
    <table class="table">
        <tr>
            <td>Name</td>
            <td><?php echo $sales['name_customer'] ?></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><?php echo $sales['email_customer'] ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $sales['address_customer'] ?></td>
        </tr>
        <tr>
            <td>Order Date</td>
            <td><?php echo date("d M Y H:i", strtotime($sales['order_date'])); ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>Rp. <?php echo number_format($sales['total']) ?></td>
        </tr>
    </table>
</div>
<div class="contents">
    <div class="content-tittle">Detail Orders</div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name product</th>
                <th>Quantity</th>
                <th>price_product</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $key => $value) : ?>

                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $value['name_product'] ?></td>
                    <td><?php echo $value['quantity'] ?></td>
                    <td><?php echo number_format($value["price_product"]) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>