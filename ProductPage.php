<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php

  require_once 'connection.php';
    
  $link = mysqli_connect($host, $user, $password, $database)
  or die("Error" . mysqli_error($link));

  $ProductId = $_GET["name"];

  $result = mysqli_query($link, "SELECT * FROM product WHERE ProductId = '$ProductId'");

  $product = mysqli_fetch_assoc($result);

?>
<?php require_once 'header.php' ?>
<div class="productPage-content">
  <?php include 'sections.php' ?>
  <div class="productPage-main">
    <div class="productPage-main-headline">
      <h2><?php echo $product['ProductName']; ?></h2>
    </div>
    <div class="productPage-main-content">
      <img src="<?php echo $product['ProductPickture']; ?>" class="productPage-main-contentPick">
      <div class="productPage-main-contentDiscritption">

        <div class="display-flex productPage-contentDiscription-text">
          <h3>Фирма:</h3><p><?php echo $product['ProductProducer']; ?></p>
        </div>

        <div class="dislay-flex productPage-contentDiscription-text">
          <h3>Цена:</h3><p><?php echo $product['ProductPrice']; ?> руб</p>
        </div>

        <div class="dislay-flex productPage-contentDiscription-text">
          <h3>Описание:</h3><p><?php echo $product['ProductDiscription']; ?></p>
        </div>

        <a href="add-to-cart.php?id=<?php echo $product['ProductId']; ?>" class="productPage-contentDiscription-btn"><button class="productPage-contentDiscription-btn">Добавить в корзину</button></a>
      </div>
      </div>
  </div>
</div>
</div>
<div class="footer">
<?php require_once 'footer.php'; ?>
</div>  
</body>
</html>