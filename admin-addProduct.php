<?php

  require_once 'connection.php';

  $productName = $_POST['productName'];

  $productPrice = $_POST['productPrice'];

  $productCount = $_POST['productCount'];

  $productType = $_POST['productType'];

  $productProducer = $_POST['productProducer'];
  
  $productDiscription = $_POST['productDiscription'];

  $productPhoto = $_FILES['photo']['name'];

  $folder = "IMG/".$_FILES['photo']['name'];

  move_uploaded_file($_FILES['photo']['tmp_name'], $folder);

  var_dump($productPhoto);

  // $result = mysqli_query($link, "INSERT INTO product VALUES(NULL, '$productName', '$productType', '$productPrice', '$productPhoto', '$productProducer', '$productCount', '$productDiscription', NULL)");

  // header("Location: index.php");

?>