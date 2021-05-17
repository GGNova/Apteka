<div>
    <?php

    include 'connection.php';
    
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Error" . mysqli_error($link));

    $result = mysqli_query($link, "SELECT * FROM `producttype`");

    if ($_COOKIE['admin'] != ''){
        ?>
            <a href="addSection.php" class="admin-line">
                <img src="ICONS/productAdd-plus.svg" alt="Img not found" class="section-line-pick">
                <p class="section-line-text">Добавить секцию</p>
                <div class="arrow"></div>
            </a>
            <hr class="line-divider">
        <?php
    }
    ?>
    
    <?php 
        while($productType = mysqli_fetch_assoc($result))
        {
            ?>
            <a href="cardsFiltered.php?ProductTypeId=<?php echo $productType['ProductTypeId'];  ?>" class="line">
            <img src="ICONS/<?php echo $productType['ProductTypeImage']; ?> " alt="Img not found" class="section-line-pick">
            <p class="section-line-text"><?php echo $productType['ProductTypeName']; ?></p>
            <div class="arrow"></div>
            </a>
            <hr class="line-divider">
            <?php
        }
    ?>

</div>

<script>
</script>