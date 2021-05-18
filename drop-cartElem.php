<?php
    session_start();

    $id = $_GET['arrId'];

    unset($_SESSION['cart'][$id]);

    header("Location: index.php");

?>