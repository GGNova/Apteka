<?php
  session_start();

  require_once 'connection.php';

  $adress = $_POST['place'];

  $totalPrice = $_POST['TotalPrice'];

  $id = $_COOKIE['userId'];


$order = $mysqli -> query("INSERT INTO orders (`OrderId`, `OrderStatus`, `userId`, `PlaceToPick`, `TotalPrice`, `Time`) VALUES (NULL, 'Заказ собирается', '$id', '$adress', '$totalPrice', current_timestamp());");

  $maxId = $mysqli->insert_id;

  foreach($_SESSION['cart'] as $key => $value){

  $prod = $mysqli -> query("UPDATE product SET ProductCount = ProductCount - '$value[count]' WHERE ProductId = '$value[id]'");

  $check = $mysqli -> query("INSERT INTO `check` VALUES(NULL, '$value[id]', '$value[count]', '$maxId')");

  }

  require_once 'dropCart.php';

?>