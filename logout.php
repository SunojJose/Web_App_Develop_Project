<?php 
    require_once 'main.php';

    if (isset($_GET['logout'])) {

        session_destroy();
        $_SESSION['login'] = false;   
    }

    header('location: index.php');    

?>