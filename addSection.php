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
  <div class="admin-addSection-window">

    <h2>Добавить секцию</h2>
    <form method="POST" action="admin-addSection.php" class="addSectionWind" enctype="multipart/form-data">

      <input type="text" class="addSections-input" name="sectionName" placeholder="Введите название секции для товара">
      
      <label for="photo">Загрузите картинку для раздела:</label>

      <input type="file" name="photo" multiple accept="image/png,image/jpeg,image/bmp, image/svg" class="admin-addProduct-input addProduct-photo">

      <input type="submit" value="Отправить данные" class="admin-addProduct-input admin-addProduct-btn">
    </form>

  </div>
  </div>
  <div class="footer">
  <?php require_once 'footer.php'; ?>
  </div>
</div>
</body>
</html>