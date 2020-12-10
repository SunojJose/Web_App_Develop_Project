<?php

require_once "main.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['submit_to_cart'])) {

        $cart->setCart($_POST['product_id']);

        $product = $cart->getCart();

        $item->id = $product->id;
        $item->brand = $product->brand;
        $item->model = $product->model;
        $item->image = $product->image;
        $item->memory = $product->memory;
        $item->color = $product->color;
        $item->stock = $product->quantity;
        $item->price = $product->price;
        $item->quantity = 1;
    }

    // check if item already in cart
    $index = -1;
    if (isset($_SESSION['cart'])) {
        $cart = unserialize(serialize($_SESSION['cart']));
        for ($i = 0; $i < count($cart); $i++)
            if ($cart[$i]->id == $_POST['product_id']) {
                $index = $i;
                break;
            }
    }
    if ($index == -1)
        $_SESSION['cart'][] = $item;
    else {
        $cart[$index]->quantity++;
        $_SESSION['cart'] = $cart;
    }

    // update cart
    if (isset($_POST['update'])) {
        if (isset($_SESSION['cart'])) {
            $cart = unserialize(serialize($_SESSION['cart']));

            $arrQuantity = $_POST['quantity'];

            // Check a valid quantity
            $valid = 1;
            for ($i = 0; $i < count($arrQuantity); $i++) {

                if (!is_numeric($arrQuantity[$i]) || $arrQuantity[$i] < 1) {
                    $valid = 0;
                    break;
                }
                if ($valid == 1) {
                    for ($i = 0; $i < count($cart); $i++) {
                        $cart[$i]->quantity = $arrQuantity[$i];
                    }
                    $_SESSION['cart'] = $cart;
                } else
                    $error = 'Quantity is InValid';
            }
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // delete from cart
    if (isset($_GET['index']) && !isset($_POST['update'])) {

        $cart = unserialize(serialize($_SESSION['cart']));
        unset($cart[$_GET['index']]);
        $cart = array_values($cart);
        $_SESSION['cart'] = $cart;
    }
    // adding orders
    if (isset($_GET['order'])) {
    
        if (isset($_SESSION['cart'])) {

            $cart_array = unserialize(serialize($_SESSION['cart']));
            $order_id = $db->connect->real_escape_string($_GET['order']);
            $cart1 = new Cart($db);
            
            foreach ($cart_array as $item) {

                $cart1->add_to_table(
                    $item->id,
                    $item->quantity,
                    $item->price,
                    $user_id,
                    $order_id
                );
            }
            unset($_SESSION['cart']);
            
        }
    }
}

?>


<?php
include './includers/head.php';
include './includers/header.php';
?>
<!-- main -->
<main id="cart_main">
    <div class="jumbotron jumbotron-fluid" style="background-color: white">
        <!-- cart -->
        <section id="cart" class="py-3">
            <div class="container">
                <div class="card shopping-cart text-primary" style="background-color: #e3f2fd;">
                    <div class="card-header fontSize-20 text-center fontSans" style="background-color: #e3f2fd;">
                        <i class="fas fa-shopping-cart" aria-hidden="true" style="color:blueviolet;"></i>
                        Shopping cart
                        <div class="clearfix"></div>
                    </div>
                    <form method="POST">
                        <div class="form-group">
                            <div class="card-body">
                                <!-- cart item -->
                                <?php
                            
                                    $s = 0.00;
                                    $index = 0;
                                    $cart;
                                    if (isset($_SESSION['cart'])) :
                                        $cart = unserialize(serialize($_SESSION['cart']));
                                            
                                            for ($i = 0; $i < count($cart); $i++) {
                                            $s += $cart[$i]->price * $cart[$i]->quantity;
                                            $qunatity[] = $cart[$i]->quantity;

                                    ?>
                                        <div class="row fontRubik">
                                            <input type="hidden" name="product_id" value="<?= $cart[$i]->id; ?>">
                                            <input type="hidden" name="available" id="available" value="<?= $cart[$i]->stock; ?>">
                                            <div class="col-12 col-sm-12 col-md-2 text-center">
                                                <img class="img-fluid" src="<?= $cart[$i]->image; ?>" alt="<?= $cart[$i]->model; ?>" style="height: 120px;">
                                            </div>
                                            <div class="col-12 text-center col-sm-12 float-left col-md-4">
                                                <h5 class="fontRubik fontSize-20"><?= $cart[$i]->brand; ?></h5>
                                                <h6><?= $cart[$i]->model; ?></h6>
                                                <h6 class="fontRubik fontSize-16"><?= $cart[$i]->memory; ?></h6>
                                                <h6 class="fontRubik fontSize-16"><?= $cart[$i]->color; ?></h6>
                                            </div>
                                            <div class="col-12 col-sm-12 text-center col-md-6 float-right row">
                                                <div class="col-3 col-sm-3 col-md-4 float-right" style="padding-top: 5px;">
                                                    <h6><strong>$&nbsp;<?= $cart[$i]->price; ?> <span class="text-muted">x</span></strong></h6>
                                                    <p hidden><?php echo $cart[$i]->price * $cart[$i]->quantity; ?></p>
                                                </div>
                                                <div class="col-4 col-sm-4 col-md-4">
                                                    <div class="qty">
                                                        <input type="number" value="<?php echo $cart[$i]->quantity; ?>" style="width: 50px;height:40px;" name="quantity[]" min="1" max="3">
                                                    </div>
                                                </div>
                                                <div class="col-2 col-sm-2 col-md-2 float-right">
                                                    <button type="button" class="btn btn-outline-success btn-xs" title="Save To WhishList" disabled>
                                                        <i class="fas fa-save" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                                <div class="col-2 col-sm-2 col-md-2 float-right">
                                                    <a href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-xs" title="Delete Item"><i class="fas fa-trash" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                <?php
                                        $index++;
                                        }
                                    endif;
                                ?>
                                <!-- end cart item-->
                                <div class="clearfix"></div>
                            </div>
                            <div class="card-footer" style="background-color: #e3f2fd;">
                                <div class="row fontRubik">
                                    <div class="col-6 float-left">
                                        <input type="text" class="form-control" placeholder="cuponcode" disabled style="width:100px; height:30px;" class="btn btn-secondary" value="" name="coupon">
                                    </div>
                                    <?php
                                    if (isset($_SESSION['cart'])) {

                                        echo '<div class="col-6">
                                                <div class="float-right">
                                                    <button type="submit" class="btn btn-warning btn-sm mx-auto">
                                                        <i class="fas fa-sync-alt"></i>
                                                        <input type="hidden" name="update" value="1">
                                                        Update
                                                    </button>
                                                </div>
                                            </div>';
                                    
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="row fontRubik">
                        <div class="col-4 float-left mx-auto">
                            <a href="index.php" class="btn btn-info btn-sm "><i class="fas fa-chevron-left"></i>&nbsp; Continue Shopping</a>
                        </div>

                        <div class="col-3 text-center" style="margin: 5px">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                echo 'Total price: <strong>$&nbsp';
                                echo round($s, 2) . '</strong>';
                            } else {
                                echo 'Total price: <strong>$&nbsp;
                                        0.0</strong>';
                            }
                            ?>
                        </div>
                        <div class="col-3 float-right mx-auto pl-5">
                            
                            <?php
                            $rand_id = mt_rand(1, 999999);
                            if (isset($_SESSION['cart']) && count($cart) > 0) {
                                echo '<a href="cart.php?order='. $rand_id. '" class=" btn btn-success btn-sm float-right" id="Order">Order Now&nbsp;<i class="fas fa-chevron-right"></i></a>';
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of cart -->
        <?php

        //<!-- special offers / ads-->
        include './includers/specials.php';
        //<!--end of special offers  -->
        // <!-- sale -->
        include './includers/sale.php';
        //<!-- end of sale -->
        //<!-- special offers / ads-->
        include './includers/specials.php';
        //<!--end of special offers  -->
        // latest
        include './includers/latest.php';
        //<!-- end of latest -->
        //<!-- special offers / ads-->
        include './includers/specials.php';
        //<!--end of special offers  -->
        ?>
    </div>
</main>
<!-- end of main -->
<?php include './includers/footer.php'; ?>