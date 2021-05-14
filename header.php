<div class="header">
  <a href="index.php" class="Logo"></a>
  <input type="search" class="Search-Box" placeholder="Найти нужное лекарство"></input>
  <?php
    if($_COOKIE['user'] == '' and $_COOKIE['admin'] == ''):
  ?>
  <button class="header_LogIn">Войти</button>
  <?php elseif($_COOKIE['user'] != ''): ?>
  <button class="header-cabinet"><a href="user-cabinet.php">Личный кабинет</a></button>
  <?php elseif($_COOKIE['admin'] != ''): ?>
    <button class="admin-cabinet"><a href="admin-cabinet.php">Администрирование</a></button>
  <?php endif; ?>
  <button class="header_shop-cart"></button>
</div>
