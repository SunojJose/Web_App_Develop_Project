<?php
    require_once "main.php";
    
    $value = $db->connect->real_escape_string($_POST['id']);
    $value = (int) $value;
    
    $product = $data->getDetails('products','id',$value);


?>

<?php ob_start(); ?>


<div id="details-<?= $product['id']; ?>" class="modal" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #e3f2fd;">
                <div class="col mx-auto text-center">
                    <h5 class="modal-title text-danger"><?= $product['category']; ?></h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
            </div>
            <!-- modal body -->
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="img-fluid" src="<?= $product['image']; ?>" alt="<?= $product['model']; ?>">
                        </div>
                        <div class="col-sm-6">
                            <h5>Details</h5>
                            <h6 class="fontRubik fontSize-16 text-info"><?= $product['model']; ?></h6>
                            <small>by <?= $product['brand']; ?> </small>
                            <div class="d-flex">
                                <div class="rating text-warning fontSize-12">
                                    <span><i class="fas fa-star"></i> </span>
                                    <span><i class="fas fa-star"></i> </span>
                                    <span><i class="fas fa-star"></i> </span>
                                    <span><i class="fas fa-star"></i> </span>
                                    <span><i class="fas fa-star"></i> </span>
                                </div>
                                <a href="#" class="px-2 fontSans fontSize-12">99 ratings | 5 answered questions</a>
                            </div>
                            <hr class="m-0">
                            <p><?= nl2br($product['description']); ?></p>
                            <p class="text-primary"><label for="color">Color: <?= $product['color']; ?></label></p>
                            <p class="text-info"><label for="memory">Memory: <?= $product['memory']; ?></label></p>
                            <p hidden><label for="price">Price: $<?= $product['price']; ?></label></p>
                            <p class="text-danger"><label for="price">Price: $<?= $product['list_price']; ?></label></p>
                            <div id="service">
                                <div class="d-flex">
                                    <div class="return text-center mr-5">
                                        <div class="fontSize-20 my-2" style="color: dodgerblue;">
                                            <span class="fas fa-check border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="fontSans fontSize-12"> 1 year<br> warranty</a>
                                    </div>
                                    <div class="return text-center mr-5">
                                        <div class="fontSize-20 my-2" style="color: dodgerblue;">
                                            <span class="fas fa-truck border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="fontSans fontSize-12">International <br> Delivery</a>
                                    </div>
                                    <div class="return text-center mr-5">
                                        <div class="fontSize-20 my-2" style="color: dodgerblue;">
                                            <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="fontSans fontSize-12">15 days <br> retrun</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <form action="cart.php" method="POST" id="add_product_form">
                                <input type="hidden" name="product_id" value="<?= $product['id']; ?>">
                                <input type="hidden" name="available" id="available" value="<?= $product['quantity']; ?>">
                                <input type="hidden" name="user_id" value="<?= $user_id; ?>">
                                <button type="submit" class="btn btn-warning" name="submit_to_cart"><i class="fas fa-shopping-cart" style="color:blueviolet;"></i>Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of modal body  -->
        </div>
        <!--  -->
        <div class="modal-footer" style="background-color: #e3f2fd;">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>


<?php echo ob_get_clean(); ?>