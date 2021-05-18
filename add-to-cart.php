<?php
session_start();
error_reporting(E_ALL);
$id = $_GET['id'];
// Проверка на то, существует ли сессия cart или нет и если она существует, то она проходит дальнейшие проверки
if (isset($_SESSION['cart'])){
  if($_SESSION['cart']['id']){
    $_SESSION['cart']['id'] += 1;
    header("Location: index.php");
  }else {
    $_SESSION['cart']['id'] = $id;
    header("Location: index.php");
  } 
}else {
  $_SESSION['cart']['id'] = $id;
}
?>



<!-- // Перебираем значение массива, находящегося в сесси с названием cart
  foreach($_SESSION['cart'] as $key => $value){

    // Если добавляемый товар уже существует, то прибавляем к элементу count этого товара 1, а затем прерываем выполнение цикла и возвращаемся на главную страницу
    if($value["id"] == $_GET["id"]){
      $_SESSION['cart'][$key]['count'] += 1;
      header('Location: index.php');
      break;

      // Если товара с данным id не сущетсвует, то создаём новый массив в сессии cart с 2 элементами 1 - id товара, 2 - количество товара, затем прерываем выполнение цикла и возвращаемся на главную страницу
    }else{
      $_SESSION['cart'][] = [
        "id" => $_GET["id"],
        "count" => 1,
      ];
      header('Location: index.php');
      break;
    }
  }
  // Если сессия cart пуста, то в неё записывается новое значение, а затем возвращается на главную
}else{
  $_SESSION['cart'][] = [
    "id" => $_GET["id"],
    "count" => 1,
  ];
  header('Location: index.php'); -->