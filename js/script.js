 // Создание переменных 
 let LogInOpener = document.querySelector(".header_LogIn");
 let LogInCloser = document.querySelector(".closer");
 let LogInWindow = document.querySelector(".LogIn-bg");
 let RegOpener = document.querySelector(".LogIn-footer button");
 let RegCloser = document.querySelector(".closer-reg")
 let RegWind = document.querySelector(".registration-bg");
 let CartWind = document.querySelector(".cart-wind-bg");
 let CartWindCloser = document.querySelector(".closer-cart"); 
 let CartWindOpener = document.querySelector(".header_shop-cart");

 // Функция открытия окна входа авторизации
 function LogInOpening(){
   LogInWindow.classList.remove("LogIn-bg");
   LogInWindow.classList.add("LogIn-bg-opened");
 }
 // Функция закрытия окна авторизации
 function LogInClosing(){
   LogInWindow.classList.remove("LogIn-bg-opened");
   LogInWindow.classList.add("LogIn-bg");
 }
 // Добавление слушателей событий для окна авторизации
 console.log(typeof LogInOpener)
 if( LogInOpener != null){
 LogInOpener.addEventListener("click",LogInOpening);
 LogInCloser.addEventListener("click",LogInClosing);
 }

 // Функция открытия окна регистрации
 function RegOpening(){
   LogInClosing();
   RegWind.classList.remove("registration-bg");
   RegWind.classList.add("registration-bg-opened");
 }
 // Функция закрытия окна регистрации
 function RegClosing(){
   RegWind.classList.remove("registration-bg-opened");
   RegWind.classList.add("registration-bg");
 }
if(RegOpener != null){
 RegOpener.addEventListener("click",RegOpening);
 RegCloser.addEventListener("click",RegClosing);
}

 function CartOpening(){
   console.log(CartWind);
   CartWind.classList.remove("cart-wind-bg");
   CartWind.classList.add("cart-wind-bg-opened");
   console.log(CartWind);
     }

 function CartClosing(){
   CartWind.classList.remove("cart-wind-bg-opened");
   CartWind.classList.add("cart-wind-bg");
 }
if(CartWindOpener != null){
 CartWindOpener.addEventListener("click",CartOpening);
 CartWindCloser.addEventListener("click",CartClosing);
}