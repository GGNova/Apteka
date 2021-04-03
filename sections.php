<form class="sections" method="POST" action="" id="ProductTypeForm">
    <?php

    require_once 'connection.php';
    
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Error" . mysqli_error($link));

    $result = $link->query('SELECT * FROM producttype');
    $productTypeName = $result->fetch_all(MYSQLI_ASSOC);
    ?>
    
    <button class="line" id="line">
    <img src="ICONS/nose.svg" alt="Img not found" class="section-line-pick">
    <p class="section-line-text" id="ProductType-name">От простуды</p>
    <div class="arrow"></div>
    </button>
    <hr class="line-divider">

    <button class="line" id="line">
    <img src="ICONS/Vitamins.svg" alt="Img not found" class="section-line-pick">
    <p class="section-line-text" id="ProductType-name">Витамины</p>
    <div class="arrow"></div>
    </button>
    <hr class="line-divider">

    <button class="line" id="line">
    <img src="ICONS/cosmetic.svg" alt="Img not found" class="section-line-pick">
    <p class="section-line-text" id="ProductType-name">Косметика</p>
    <div class="arrow"></div>
    </button>
    <hr class="line-divider">

    <button class="line" id="line">
    <img src="ICONS/Eye.svg" alt="Img not found" class="section-line-pick">
    <p class="section-line-text" id="ProductType-name">Зрение</p>
    <div class="arrow"></div>
    </button>
    <hr class="line-divider">

    <button class="line" id="line">
    <img src="ICONS/Child.svg" alt="Img not found" class="section-line-pick">
    <p class="section-line-text" id="ProductType-name">Для детей</p>
    <div class="arrow"></div>
    </button>
    <hr class="line-divider">

    <button class="line" id="line">
    <img src="ICONS/diabet.svg" alt="Img not found" class="section-line-pick">
    <p class="section-line-text" id="ProductType-name">Диабет</p>
    <div class="arrow"></div>
    </button>
    <hr class="line-divider">

    <button class="line" id="line">
    <img src="ICONS/tests.svg" alt="Img not found" class="section-line-pick">
    <p class="section-line-text" id="ProductType-name">Тесты</p>
    <div class="arrow"></div>
    </button>
    <hr class="line-divider">

</form>

<script>

// let productTypeName = <?= json_encode($productTypeName)?>;

// console.log(productTypeName);

// function loadProductType(){
//     let line = '<button class="line" id="line"><img src="" id="ProductType-image" alt="Во время загрузки изображения возникла ошибка" class="section-line-pick"> <p class="section-line-text" id="ProductType-name"></p> <div class="arrow"></div> </button><hr class="line-divider">'
    
//     productTypeName.forEach(obj => {
//         line = (line.value == obj.ProductTypeId ? line + `<p class="section-line-text" id="ProductType-name">'${obj.ProductTypeName}'</p> <img src='${obj.ProductTypeImage}' id="ProductType-image" alt="Во время загрузки изображения возникла ошибка" class="section-line-pick"> <p class="section-line-text" id="ProductType-name">'${obj.ProductTypeName}'</p> <div class="arrow"></div>` : line );
//     })
//     ProductTypeForm.innerHTML = line;
// }

// function addAllProductType(){
//     let line = '<button class="line" id="line"><img src="" id="ProductType-image" alt="Во время загрузки изображения возникла ошибка" class="section-line-pick"> <p class="section-line-text" id="ProductType-name"></p> <div class="arrow"></div> </button><hr class="line-divider">'
//     productTypeName.forEach(obj => line +=`<p class="section-line-text" id="ProductType-name">'${obj.ProductTypeName}'</p> <img src='${obj.ProductTypeImage}' id="ProductType-image" alt="Во время загрузки изображения возникла ошибка" class="section-line-pick"> <p class="section-line-text" id="ProductType-name">'${obj.ProductTypeName}'</p> <div class="arrow"></div>`);
//     ProductTypeForm.innerHTML = line;
// }

// addAllProductType()
// loadProductType()
</script>