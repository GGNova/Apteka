<?php session_start(); ?>
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
    <div class="buyAll-block">
      <h2>Оформление заказа</h2>
      <form method="POST" action="script-buyAllFromCart.php" class="buyAll-window">
        <p>Общая цена: <?php echo $_GET['price'] ?> р.</p>
        <input type="text" name="place" placeholder="Введите адрес доставки">
        <input type="hidden" name="TotalPrice" value="<? echo $_GET['price']; ?>">
        <input type="submit" value="Отправить данные">
      </form>
    </div>
    </div>
    <div class="footer">
        <? require_once 'footer.php'; ?>
    </div>
</div>
</body>
</html>