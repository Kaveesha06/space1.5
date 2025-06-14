<?php

include "connection.php";
session_start();
$user = $_SESSION["u"];
$netTotal = 0;

$rs = Database::search("SELECT * FROM `wishlist`INNER JOIN `stock` 
                        ON `wishlist`.`stock_sid` = `stock`.`sid` INNER JOIN `product` 
                        ON `stock`.`product_id` = `product`.`id` 
                        WHERE `wishlist`.`user_id` = '" . $user["id"] . "' ");

$num = $rs->num_rows;

if ($num > 0) {
    //LOad 
?>

    <div class="mb-4 mt-5">
        <h3>Wishlist</h3>
    </div>

    <?php
    for ($i = 0; $i < $num; $i++) {
        #code
        $d = $rs->fetch_assoc();
        $total = $d["price"] * $d["wishlist_qty"];
        $netTotal += $total;
    ?>
        <!--wishlist items-->
        <div class="col-12 border-3 rounded-5 p-3 mb-2 d-flex justify-content-between">
            <div class="d-flex align-items-center col-5">
                <img src="<?php echo $d["path"] ?>" class="rounded-4" width="200px" />
                <div class="ms-5">
                    <h4><?php echo $d["name"]  ?></h4>
                    <!-- <p class="text-muted"><?php echo $d["fran_id"] ?></p> -->
                    <h5 class="text-warning">Rs: <?php echo $d["price"] ?></h5>
                </div>
            </div>
            <div class="d-flex align-items-center gap-2">

                <input type="number" id="qty<?php echo $d['wishlist_id'] ?>" class="form-control form-control-sm text-center" style="max-width: 100px;" value="<?php echo $d["wishlist_qty"] ?>" disabled />

            </div>
            <div class="d-flex align-items-center">
                <h4>Total: <span class="text-warning">Rs:<?php echo $total ?> </span></h4>
            </div>
            <div class="d-flex align-items-center">
                <button class="btn btn-danger btn-sm" onclick="removeWishlist('<?php echo $d['wishlist_id'] ?>');">X</button>
            </div>
        </div>
        <!--Wishlist items-->
    <?php
    }

    ?>


    <div class="col-12 mt-4">
        <hr>
    </div>

    <!--checkout-->
    <div class="d-flex flex-column align-items-end">
        <h6>Number Of Items:<span class="text-info"><?php echo $num ?></span></h6>
        <h6>Delivary Fee:<span class="text-info">Rs: 200</span></h6>
        <h6>Net Total:<span class="text-info"><?php echo ($netTotal + 200) ?></span></h6>
        <button class="btn btn-success col-3 mt-3 mb-4" onclick="checkOut();">CHECKOUT</button>
    </div>
    <!--check out-->

<?php
} else {
    // echo("empty");
?>

    <div class="col-12 text-center mt-5">
        <h2>Your Wish List is empty</h2>
        <h5 class="offset-1">No Result Found</h5>
        <img src="resource/Astronot.gif" height="400px;" width="350px" />
        <p><b>We are sorry.,</b></p>
        <a href="index.php" class="btn btn-primary">Start Shopping</a>
    </div>

<?php
}

?>