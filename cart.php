
    <div class="cart-wind">
    <?php

      require_once 'connection.php';
  
      $link = mysqli_connect($host, $user, $password, $database)
      or die("Error" . mysqli_error($link));

      $ProductId = mysqli_fetch_assoc($_SESSION['cart']);

      var_dump($ProductId);

      $result = mysqli_query($link, "SELECT * FROM product WHERE ProductId = '$ProductId'");

      $product = mysqli_fetch_assoc($result);

    ?>
      <div class="cart-wind-headline">
        <h4>Корзина</h4>
        <div class="closer-cart"><span class="closer-cart-stick"></span><span class="closer-cart-stick"></span></div>
      </div>

      <div class="cart-wind-content">

        <div class="cart-line">
          <!-- <img src="" -->
        </div>

      </div>
    </div>