<?php
    session_start();

    $id = $_GET['arrId'];

    $_SESSION['cart'][$id]['count'] += 1;

    header("Location: index.php");


?>