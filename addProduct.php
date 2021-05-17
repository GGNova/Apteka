<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
<div class="main">
  <?php
    require_once 'connection.php';
    require_once 'header.php';
  ?>
  <div class="content">
    <?php require_once 'sections.php'; ?>
    <div class="productAdd-window">
      <h2>Добавить товар</h2>
      <div class="productAdd-mainBlock">
      <form method="POST" action="admin-addProduct.php" class="addProduct-form" enctype="multipart/form-data">

        <input type="text" name="productName" placeholder="Введите название товара" class="admin-addProduct-input">

        <input type="text" name="productPrice" placeholder="Введите цену товара" class="admin-addProduct-input">

        <input type="number" name="productCount" placeholder="Введите количество товара" class="admin-addProduct-input">

        <input type="text" name="productProducer" placeholder="Введите изготовителя товара" class="admin-addProduct-input">

        <input type="text" name="productDiscription" placeholder="Введите описание товара" class="admin-addProduct-input">

        <select class="admin-addProduct-input" name="productType">
          <?php 
            $result = mysqli_query($link, "SELECT ProductTypeId,ProductTypeName FROM producttype");

            while ($productType = mysqli_fetch_assoc($result)){
              ?>
                <option value="<?php echo $productType['ProductTypeId']; ?>">
                <?php echo $productType['ProductTypeName']; ?>
                </option>
              <?php
            }
          ?>
        </select>

        <input type="file" name="photo" multiple accept="image/png,image/jpeg,image/bmp" class="admin-addProduct-input addProduct-photo">

        <input type="submit" value="Отправить данные" class="admin-addProduct-input">
      </form>
      </div>
    </div>


  </div>
  <div class="footer">
    <? require_once 'footer.php'; ?>
  </div>
</div>
</body>
</html>