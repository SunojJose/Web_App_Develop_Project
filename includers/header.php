<?php

$brands = $data->getDistinct();
$cat = 'category';
$categories = $data->getDistinct($cat);

?>

<body>
    <!-- header -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-3 py-1 bg-light">
            <p class="fontSans fontSize-12 m-0" style="color: lightslategray">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            <div class="fontRubik fontSize-14">
                <?php
                if (isset($_SESSION['login']))
                    echo '<a href="logout.php?logout=1" class="px-3 border-right border-left text-danger" title="Logged In As: '. $_SESSION["user_name"]. '">Logout</a>';
                else
                    echo '<a href="login.php" class="px-3 border-right border-left text-primary" title="Not Logged In">Login</a>';
                ?>
                <a href="#" class="px-3 border-right border-left text-primary">WishList(0)</a>
            </div>
        </div>
        <!-- navigation -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="index.php" style="color: blueviolet;">Gadgets4U</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto fontRubik">
                    <li class="nav-item active">
                        <a class="nav-link" href="#sale" style="color: crimson;">Sale</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" style="color: dodgerblue;" data-toggle="dropdown" id="navbarDropdown" role="button">Products</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#featured" style="color: crimson">Brands</a>
                            <div class="dropdown-divider"></div>
                            <div id="prod_links">

                                <?php foreach ($brands as $brand) { ?>
                                    <a class="dropdown-item" href="product.php?brand=<?php echo $brand['brand']; ?>" style="color:darkslateblue"><?php echo $brand['brand']; ?></a>
                                <?php } ?>
                            </div>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" style="color: dodgerblue;" data-toggle="dropdown">Category</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="cat_links">
                            <?php foreach ($categories as $category) { ?>
                                <a class="dropdown-item" href="product.php?category=<?php echo $category['category']; ?>" style="color:darkslateblue"><?php echo $category['category']; ?></a>
                            <?php } ?>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#latest" style="color: dodgerblue;">Latest Arrivals</a>
                    </li>
                </ul>
                <form action="#" class="fontRubik fontSize-14">
                    <a href="cart.php" class="py-2">
                        <span class="fontSize-16 px-2 text-dark">
                            <i class="fas fa-shopping-cart" style="color:blueviolet;"></i>
                        </span>
                        <span class="px-3 py-2 rounded-pill text-warning bg-light">
                            <?php if (isset($_SESSION['cart'])) echo count($_SESSION['cart']);
                            else echo 0; ?>
                        </span>
                    </a>
                </form>
            </div>
        </nav>
        <!-- end of navigation -->
    </header>
    <!-- end of header -->