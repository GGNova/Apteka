<div class="cards-block">
<h2>Специальные Предложения</h2>  
    <div class="cards">  
        <?php

        require_once 'connection.php';

        $result = mysqli_query($link, "SELECT * FROM `product`");

        $product = mysqli_fetch_assoc($result);

        ?>

        <?php 
            while($product = mysqli_fetch_assoc($result))
            {
                ?>
                <div class="card-group">
                    <a href="ProductPage.php?name=<?php echo $product['ProductId']; ?>" class="card">
                        <img src="<?php echo $product['ProductPickture']; ?>" alt="File not found" class="card-image">
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