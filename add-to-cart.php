<?php

session_start();

foreach ($_SESSION['cart'] as $key => $value) {
  if($value["id"] == $_GET["id"]){
    $_SESSION['cart'][$key]['count'] += 1;
    header('Location: index.php');
    break;
  }else{
    $_SESSION['cart'][] = [
      "id" => $_GET["id"],
      "count" => 1,
    ];
  }
}
header('Location: index.php');
?>