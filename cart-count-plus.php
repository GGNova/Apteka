<?php
    session_start();

    require_once 'connection.php';

    $id = $_GET['arrId'];

    $prodId = $_SESSION['cart'][$id]["id"];

    $result = $mysqli -> query("SELECT * FROM product WHERE ProductId = '$prodId'");

    $prodCount = mysqli_fetch_assoc($result);

    if($_SESSION['cart'][$id]['count'] < $prodCount['ProductCount']){
        $_SESSION['cart'][$id]['count'] += 1;
        header("Location: index.php");
    }else{
        echo 'Больше товара заказать нельзя ';
        echo ' <a href="index.php">На главную</a>';
    }

    


?>