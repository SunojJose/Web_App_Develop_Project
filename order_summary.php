<?php
require_once "main.php";

$orders = array();
if (isset($_SESSION['order_id'])) {
    $order_id = $_SESSION['order_id'];
    $orders = $data->getTableData('orderdetails', 'order_id', $order_id);
}

?>

<?php
include './includers/head.php';
include './includers/header.php';
?>

<main id="cart_main">
    <div class="jumbotron jumbotron-fluid" style="background-color: white">
        <!-- summary -->
        <section id="summary" class="py-3 ">
            <div class="container">
                <div class="row fontRubik">
                    <div class="col-md-12">
                        <div class="card text-primary" style="background-color: #e3f2fd;">
                            <div class="card-header fontSize-20 text-center fontSans" style="background-color: #e3f2fd;">
                                Order Summary
                                <div class="clearfix"></div>
                            </div>
                            <!-- <form method="POST">
                                <div class="form-group"> -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-left">#</th>
                                                <th scope="col" class="text-left">Item</th>
                                                <th scope="col" class="text-center">Price</th>
                                                <th scope="col" class="text-center">Quantity</th>
                                                <th scope="col" class="text-right">Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $total = 0.0;
                                            $shipping_cost = 0.0;
                                            $total += $shipping_cost;
                                            $discount = 0.0;
                                            $total -= $discount;
                                            $count = 1;
                                            foreach ($orders as $order) {

                                                $id = $order['product_id'];
                                                $product = $data->getDetails('products', 'id', $id);
                                                $price = (float) $order['price'];
                                                $quant = (int) $order['quantity'];
                                                $total += $price * $quant;
                                            ?>
                                                <tr>
                                                    <td><?php echo $count; ?></td>
                                                    <td scope="row">
                                                        <div class="d-flex justify-content-between">
                                                            <?php echo $product['brand']; ?>
                                                            &nbsp;
                                                            <?php echo  $product['model']; ?>
                                                            &nbsp;
                                                            <?php echo  $product['memory']; ?>
                                                            &nbsp;
                                                            <?php echo  $product['color']; ?>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">$&nbsp;<?php echo $order['price']; ?></td>
                                                    <td class="text-center"><?php echo $order['quantity']; ?></td>
                                                    <td class="text-right">$&nbsp;<?php echo round(($price * $quant), 2); ?> </td>
                                                </tr>
                                            <?php
                                                $count++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: #e3f2fd;">
                                <p class="text-right">Discounts: $ <?php echo $discount; ?> </p>
                                <p class="text-right">Shipping Charge: $ <?php echo $shipping_cost; ?> </p>
                                <h6 class="text-right">Total To Pay: &nbsp;$ <?php echo round($total, 2); ?> </h6>
                            </div>
                            <!-- </div>
                            </form> -->
                        </div>
                    </div>
                </div>
                <br>
                <div class="row fontRubik">

                    <div class="col-3 float-left mx-auto">
                        <p>Existing Customer? Please&nbsp;<a href="login.php">Login </a>to Complete Payement.</p>
                    </div>
                    <div class="col-3 text-center mx-auto">
                        <p>Wish to become a Member? Please&nbsp;<a href="signup.php">Register </a>Now.</p>
                    </div>
                    <div class="col-3 float-right mx-auto pl-5">
                        <p>Wish to Continue as a Guest? Please Click&nbsp;<a href="#">Here </a>to Check Out.</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of summary -->
    </div>
</main>
<?php include './includers/footer.php'; ?>