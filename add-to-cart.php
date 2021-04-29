<?php

session_start();  

error_reporting(E_ALL);

echo 'ID: ', $_GET['id'], '<br>';

foreach ($_SESSION['cart'] as $key => $value) {
  if($value["id"] == $_GET["id"]){
    $_SESSION['cart'][$key]['count'] += 1;
  }
}


$addedProduct = [
    'id' => $_GET['id'],
    'count' => 1
];

$_SESSION['cart'][] = [
  "id" => $_GET["id"],
  "count" => 1,
];

echo '<pre>';
var_dump($_SESSION['cart']);
echo '</pre>';

// header('Location: index.php');

?>