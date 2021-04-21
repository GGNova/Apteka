<div class="cards-block">
<h2>Специальные Предложения</h2>  
    <div class="cards">  
        <?php

        include 'connection.php';
    
        $link = mysqli_connect($host, $user, $password, $database)
        or die("Error" . mysqli_error($link));

        $result = mysqli_query($link, "SELECT * FROM `product`");

        $product = mysqli_fetch_assoc($result);

        $rows = count($product);

        

        ?>

        <?php 
            for($i=0; $i < $rows-1 ;$i++)
            {
                $product = mysqli_fetch_assoc($result);
                ?>

                <div class="cards">
                    <a href="ProductPage.php?name=<?php echo $product['ProductId']; ?>" class="card">
                        <img src="<?php echo $product['ProductPickture']; ?>" alt="File not found" class="card-image">
                        <p class="card-title"><?php echo $product['ProductName']; ?></p>
                        <p class="card-discription"><?php echo $product['ProductDiscription']; ?></p>
                        <p class="card-price"><?php echo $product['ProductPrice']; ?> р</p>
                        <form method="GET" action="">
                            <input type="button" class="card-btn" value='В корзину'>
                        </form>
                    </a>
                </div>

            <?php
        }
        ?>

</div>
</div>