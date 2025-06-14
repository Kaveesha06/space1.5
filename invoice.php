<?php

session_start();
include "connection.php";
$user = $_SESSION["u"];
$orderHistoryID = $_GET["order_history"];

$rs = Database::search("SELECT * FROM `order_history` WHERE `ohid` = '" . $orderHistoryID . "' ");
$num = $rs->num_rows;

if ($num > 0) {
    $d = $rs->fetch_assoc();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="icon" href="resource/lunar_arcade_logo_edit.png" />
        <title>LA-Invoice</title>
    </head>

    <body>

        <div class="container text-end mt-2">
            <a href="index.php"><button class="btn btn-outline-dark btn-sm">Home</button></a>
        </div>

        <div class="container mt-2 mn-4">
            <div class="border border-3 border-black p-5 rounded-3">
                <div class="row">
                    <div class="col-6">
                        <h3>Order ID #<?php echo $d["order_id"]?></h3>
                        <h5><?php echo $d["order_date"]?></h5>
                    </div>
                    <div class="col-6 text-end">
                        <h1>I N V O I C E</h1>
                        <h4>Lunar Arcade</h4>
                        <h5>07/127</h5>
                        <h5>Menikhinna</h5>
                        <h5>Kandy</h5>
                    </div>

                    <div>
                        <h4><?php echo $user["fname"]?><?php echo $user["lname"]?></h4>
                        <h5><?php echo $user["mobile"]?></h5>
                        <h5>No.<?php echo $user["no"]?></h5>
                        <h5><?php echo $user["line_1"]?></h5>
                        <h5><?php echo $user["line_2"] ?></h5>
                    </div>

                    <div class="ps-5 pe-5 mt-5">
                        <table class="table table-hover border border-1 border-black">
                            <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Franchise/th>
                                    <th scope="col">Categoty</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $rs2 = Database::search("SELECT * FROM `order_item` 
                                        INNER JOIN `stock` ON `order_item`.`stock_sid` = `stock`.`sid` 
                                        INNER JOIN `product` ON `stock`.`product_id` = `product`.`id` 
                                        INNER JOIN `franchise` ON `product`.`franchise_fran_id` = `franchise`.`fran_id` 
                                        INNER JOIN `category` ON `product`.`category_cat_id` = `category`.`cat_id` 
                                        WHERE `order_item`.`order_history_ohid` = '".$orderHistoryID."'");

                                $num2 = $rs2->num_rows;

                                for ($i = 0; $i < $num2; $i++) {
                                    $d2 = $rs2->fetch_assoc();
                                ?>
                                <tr>
                                    <td><?php echo $d2["name"]?></td>
                                    <td><?php echo $d2["fran_name"]?></td>
                                    <td><?php echo $d2["cat_name"]?></td>
                                    <td><?php echo $d2["oi_qty"]?></td>
                                    <td>Rs. <?php echo ($d2["price"] * $d2["oi_qty"])?></td>
                                </tr>
                                <?php 
                                }  
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="text-end mt-5 pe-5">
                        <h6>Number of Items : <span class="text-muted"><?php echo $num2 ?></span></h6>
                        <h5>Delivery Fee : <span class="text-muted">200</span></h5>
                        <h3>Net Total : <span class="text-muted"><?php echo $d["amount"]?></span></h3>
                    </div>

                </div>

            </div>
        </div>

    </body>

    </html>

<?php

} else {
    header("location: index.php");
}

?>