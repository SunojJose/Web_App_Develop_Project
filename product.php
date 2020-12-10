<?php
    require_once "main.php";
    $products = array();
    $val = '';

    if (isset($_GET['brand'])) {

        $val = $db->connect->real_escape_string($_GET['brand']);
        $products = $data->getTableData('products', 'brand', $val);

    } else if (isset($_GET['category'])) {

        $val = $db->connect->real_escape_string($_GET['category']);
        $products = $data->getTableData('products', 'category', $val);
    }
    shuffle($products);
?>

<?php
    include './includers/head.php';
    include './includers/header.php';

?>

<main id="products-main">
    <div class="jumbotron jumbotron-fluid" style="background-color: white">
        <?php include './includers/specials.php'; ?>
        <section id="products" style="text-align: center;">
            <div class="container-fluid py-5">
                <h4 id="featured_prod" class="card-title fontRubik fontSize-20 pb-3" style="color: dodgerblue;">Products</h4>
                <div class="col grid-margin stretch-card">
                    <!-- carousel -->
                    <div class="owl-carousel owl-theme">
                        <?php foreach ($products as $product) : ?>
                            <div class="card h-100">
                                <div class="card-body  d-flex flex-column">
                                    <div class="item py-2">
                                        <div class="product fontSans">
                                            <div><img src="<?= $product['image']; ?>" alt="<?= $product['model']; ?>" class="img-fluid"></div>
                                            <hr>
                                            <div class="text-center">
                                                <h6 class="text-primary"><?= $product['brand']; ?>&nbsp;<small><?= $product['model']; ?></small>&nbsp;</h6>
                                                <small class="text-secondary"> <?= $product['color']; ?></small>
                                                <div class="rating text-warning fontSize-12">
                                                    <span><i class="fas fa-star"></i> </span>
                                                    <span><i class="fas fa-star"></i> </span>
                                                    <span><i class="fas fa-star"></i> </span>
                                                    <span><i class="fas fa-star"></i> </span>
                                                    <span><i class="fas fa-star"></i> </span>
                                                </div>
                                                <p class="list-price text-danger pt-2" hidden>List Price: <s>$<?= $product['list_price']; ?></s>
                                                </p>
                                                <p class="list-price pt-2 text-warning">List Price: $<?= $product['list_price']; ?>
                                                </p>
                                                <p class="price pt-1 text-warning" hidden>Sale Price: $<?= $product['price']; ?></p>
                                                <div class='id'><input type="hidden" value="<?= $product['id']; ?>" name="id" />
                                                    <p class="pt-1"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, natus.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-auto"><button type="button" class="btn btn-info fontSize-12" data-id="<?= $product['id']; ?>" id="info" data-toggle="modal" data-target="#details-<?= $product['id']; ?>">Deatils</button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- end of carousel -->
                </div>
            </div>
        </section>
    </div>
</main>
<?php

    include './includers/sale.php';
    include './includers/specials.php';
    include './includers/latest.php';
    include './includers/specials.php';
    include './includers/footer.php';
?>