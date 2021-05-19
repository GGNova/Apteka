<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="main">
        <? 
            require_once "connection.php";
            require_once "header.php";
        ?>
        <div class="content">
            <? require_once 'sections.php'; ?>
            <div class="editProduct-block">
                <h2>Редактировать товар</h2>
                <form method="POST" action="" class="editProduct-window" enctype="multipart/form-data">
                    <?php
                        $id = $_GET['id'];
                        $result = $mysqli -> query("SELECT * FROM product WHERE ProductId = '$id'");
                        $product = $result -> fetch_assoc();
                        $productType = $mysqli -> query("SELECT * FROM producttype WHERE ProductTypeId = '$product[ProductTypeId]'");
                        $type = $productType -> fetch_assoc();
                    ?>
                    <label for="newName" class="editProduct-label">Старое название товара: <? echo $product['ProductName']; ?></label>
                    <input type="text" name="newName" placeholder="Введите новое название товара">

                    <label for="productType" class="editProduct-label">Старая секция товара: <? echo $type['ProductTypeName']; ?></label>
                    <select class="editProduct-select" name="productType">
                        <?php 
                        $NewType = mysqli_query($link, "SELECT ProductTypeId,ProductTypeName FROM producttype");
                        while ($selectType = mysqli_fetch_assoc($NewType)){
                        ?>
                        <option value="<?php echo $selectType['ProductTypeId']; ?>">
                        <?php echo $selectType['ProductTypeName']; ?>
                        </option>
                        <?php
                        }
                        ?>
                    </select>

                    <label for="" class="editProduct-label">Старая цена товара: <? echo $product['ProductPrice']; ?> р.</label>
                    <input type="text" name="newPrice" placeholder="Введите новую цену товара">

                    <label for="" class="editProduct-label">Старая картинка товара: <img src="IMG/<? echo $product['ProductPickture']; ?>" width="100px" height="100px"></label>
                    <input type="file" name="photo" multiple accept="image/png,image/jpeg,image/bmp, image/svg" class="admin-addProduct-input addProduct-photo">

                    <label for="" class="editProduct-label">Старый производитель товара: <? echo $product['ProductProducer']; ?></label>
                    <input type="text" name="newProducer" placeholder="Введите нового производителя товара">

                    <label for="" class="editProduct-label">Старое количество товара: <? echo $product['ProductCount']; ?> ед.</label>
                    <input type="text" name="newCount" placeholder="Введите новое количество товара">

                    <label for="" class="editProduct-label">Старое описание товара: <? echo $product['ProductDiscription']; ?></label>
                    <input type="text" name="newDiscr" placeholder="Введите новое описание товара">

                    <label for="" class="editProduct-label">Старое краткое описание товара: <? echo $product['Brief']; ?></label>
                    <input type="text" name="newBrief" placeholder="Введите новое краткое описание товара">

                    <input type="submit" value="Отправить">
                </form>
            </div>
        </div>
        <div class="footer">
            <? require_once 'footer.php'; ?>
        </div>
    </div>
</body>

</html>