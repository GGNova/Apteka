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
        <div class="cards-block">
<h2>Специальные Предложения</h2>  
    <div class="cards">  
        <?php

        require_once 'connection.php';

        $result = $mysqli->query("SELECT * FROM product where ProductTypeId = '$_GET[ProductTypeId]'");

            while($product = mysqli_fetch_assoc($result))
            {
                ?>
                <div class="card-group">
                    <a href="ProductPage.php?name=<?php echo $product['ProductId']; ?>" class="card">
                        <img src="IMG/<?php echo $product['ProductPickture']; ?>" alt="File not found" class="card-image">
                        <p class="card-title"><?php echo $product['ProductName']; ?></p>
                        <p class="card-discription"><?php echo $product['ProductDiscription']; ?></p>
                        <p class="card-price"><?php echo $product['ProductPrice']; ?> р</p>
                            <a href="add-to-cart.php?id=<?php echo $product['ProductId']; ?>" class="card-btn">В корзину</a>
                    </a>
                </div>


            <?php
        }
        ?>

</div>
</div>
    
    
    </div>

    <div class="footer">
        <?php require_once 'footer.php'; ?>
    </div>
</div>
</body>
</html>