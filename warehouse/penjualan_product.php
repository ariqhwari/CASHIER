<?php
//mendapatkan id_sales 
$id_sales = $_GET['id_sales'];

//ambil dari tabel sales
$ambil = $con->query("SELECT * FROM sales
                    LEFT JOIN customer ON sales.id_sales=customer.id_customer
                    WHERE sales.id_sales='$id_sales' AND ");
                $sales = $ambil->fetch_assoc();


            $product = array();
            $ambil = $conn->query("SELECT * FROM sales_product WHERE id_sales='$id_sales' AND ");
            while ($tiap = $ambil->fetch_assoc())
            {
                $product[] = $tiap;
            }

            echo "<pre>";
            print_r($sales);
            print_r($product);
            echo "</pre>";
?>
            <div class="row">
                <div class="col-md-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <td>id sales</td>
                                    <td><?php echo $sales['id_sales']?></td>
                                </tr>
                                <tr>
                                    <td>id customer</td>
                                    <td><?php echo $sales['id_customer']?></td>
                                </tr>
                                <tr>
                                    <td>id user</td>
                                    <td><?php echo $sales['id_user']?></td>
                                </tr>
                                <tr>
                                    <td>order date</td>
                                    <td><?php echo $sales['order_date']?></td>
                                </tr>
                                <tr>
                                    <td>total</td>
                                    <td><?php echo $sales['total']?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow">
                <div class="card-body">
                    <table class="t">
                    <thead>
                        <tr>
                            <th>id product</th>
                            <th>name_product</th>
                            <th>id_category</th>
                            <th>price_product</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($product as $key => $value): ?>
                            <tr>
                                <td><?php echo $key+1 ?></td>
                                <td><?php echo $value["id_product"] ?></td>
                                <td><?php echo $value["name_product"]?></td>
                                <td><?php echo $value["id_category"]?></td>
                                <td><?php echo number_format ($value["price_product"])?></td>
                            </tr>
                            <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>To</td>
                        </tr>
                    </tfoot>
                </table>
                </div>
            </div>