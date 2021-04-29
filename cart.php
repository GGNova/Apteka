<?php session_start(); ?>
    <div class="cart-wind">
    <div class="cart-wind-headline">
        <h4>Корзина</h4>
        <div class="closer-cart"><span class="closer-cart-stick"></span><span class="closer-cart-stick"></span></div>
    </div>
    <div class="cart-wind-content">
    <?php

      require_once 'connection.php';
  
      $link = mysqli_connect($host, $user, $password, $database)
      or die("Error" . mysqli_error($link));

      foreach ($_SESSION['cart'] as $key => $value) {
        // echo 'Ключ: ';
        // var_dump($key);
        // echo '<br>','Значение: ';
        // Var_dump($value);
        // var_dump($value['id']);

        $result = mysqli_query($link, "SELECT * FROM product WHERE ProductId = '$value[id]'");

        $product = mysqli_fetch_assoc($result);
        
        var_dump($product);

        while ($product = mysqli_fetch_assoc($result))
        {
          ?>
          <div class="cart-line">
          <img src="<?php echo $product['ProductPickture']; ?>" class="" alt="ERROR 404">
          <p>PIDORAS</p>
          </div>

        <?php 
        }

      }

      


    ?>

      </div>
    </div>