<form class="sections" method="POST" action="" id="ProductTypeForm">
    <?php

    include 'connection.php';
    
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Error" . mysqli_error($link));

    $result = mysqli_query($link, "SELECT * FROM `producttype`");

    $productType = mysqli_fetch_assoc($result);
    
    

    ?>
    
    <?php 
        while($productType = mysqli_fetch_assoc($result))
        {
            ?>
            <button class="line" id="line">
            <img src="<?php echo $productType['ProductTypeImage']; ?> " alt="Img not found" class="section-line-pick">
            <p class="section-line-text" id="ProductType-name"><?php echo $productType['ProductTypeName']; ?></p>
            <div class="arrow"></div>
            </button>
            <hr class="line-divider">
            <?php
        }
    ?>

</form>

<script>
</script>