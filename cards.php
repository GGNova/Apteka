<div class="cards-block">
<h2>Список товаров</h2>  
    <div class="cards">  
        <?php

        require_once 'connection.php';

        $result = mysqli_query($link, "SELECT * FROM `product`");

        if($_COOKIE['admin'] != ''){
            ?>
            <div class="Admin-cardGroup">
                <a href="addProduct.php" class="admin-card">
                    <img src="ICONS/productAdd-plus.svg" alt="ERROR 404">
                    <p>Добавить товар</p>
                </a>
                </div>
            <?php
        }
        ?>

        <?php 
            while($product = mysqli_fetch_assoc($result))
            {if($product['ProductCount']){
                ?>
                <div class="card-group">
                    <a href="ProductPage.php?name=<?php echo $product['ProductId']; ?>" class="card">
                        <img src="IMG/<?php echo $product['ProductPickture']; ?>" alt="File not found" class="card-image">
                        <p class="card-title"><?php echo $product['ProductName']; ?></p>
                        <p class="card-discription"><?php echo $product['Brief']; ?></p>
                        <p class="card-price"><?php echo $product['ProductPrice']; ?> р</p>
                            <a href="add-to-cart.php?id=<?php echo $product['ProductId']; ?>" class="card-btn">В корзину</a>
                    </a>
                </div>


            <?php
            }
        }
        ?>

</div>
</div>