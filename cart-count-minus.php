<?php
    session_start();

    $id = $_GET['arrId'];

    if($_SESSION['cart'][$id]['count'] > 1){
        $_SESSION['cart'][$id]['count'] -= 1;
    }

    header("Location: index.php");
?>