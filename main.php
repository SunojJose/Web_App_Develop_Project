<?php
    require_once "./core/init.php";
    require("./core/util.php");
    require("./core/cart.php");
    require("./core/item.php");
    require("./core/user.php");
    
    $db = new DbConnect();
    $data = new Data($db);
    $cart = new Cart($db);
    $item = new Item();
    $user = new User($db);

    session_start();
    
    $_SESSION;
    
    $user_id ;
    //$order_id;

    if (isset($_SESSION['login'])) {

        if (isset($_SESSION['user_id']))

            $user_id = $_SESSION['user_id'];
    } else {

        $user_id = mt_rand(1, 999999);
    }

    // $_SESSION['order_id'] = mt_rand(1, 999999);
    // $order_id = mt_rand(1, 999999);
    // $order_id = $_SESSION['order_id'];
    
    
?>