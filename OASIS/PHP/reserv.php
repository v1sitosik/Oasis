<?php
    require "db.php";      
    if (isset($_POST['send'])) {
        
    $bron = R::dispense('bron');
    $bron->checkin = $_POST['checkin'];
    $bron->checkout = $_POST['checkout'];
    $bron->adults = $_POST['adults'];
    $bron->children = $_POST['children'];
    $bron->email = $_POST['email'];
    $bron->phone = $_POST['phone'];

        R::store($bron);
        header('location: reserv.php');
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <link rel="stylesheet" type="text/css" href="..//CSS/reserv.css">
    <link rel="icon" href="../Assets/LOGO1.png" type="image/x-icon">
  </script>
</head>
<body>
<header>
        <div class="header_cont">
            <a href="..//html/index.html"><img class="Logo" src="..//Assets/LOGO.png" ></a>
            <div class="menu_ico"> 
                <span></span>
            </div>
            <nav class="buttons">
                <ul class="menu UAL">
            <li><a href="..//html/Info.html" class="b1">О нас</a></li>
            <li><a href="..//html/numbers.html" class="b1">Номера</a></li>
            <li><a href="..//html/restaurant.html" class="b1">Ресторан</a></li>
            <li><a href="feedback.php" class="b1">Отзывы</a></li>
            <li><a href="..//html/contacts.html" class="b1">Контакты</a></li>
            </ul>
            </nav>
        
            <div class="res">
                <button class="reserv"><a href="reserv.php" class="b1">Бронирование</a></button>
            </div>
        </div>
        </header>
<main>
    <div class="co">
    <div class="con">
        <div class="contaiter">
        <h1>Бронирование номера</h1>
            <form method="post" action="" class="n">
                <label for="checkin">Дата заезда:</label>
                    <input type="date" id="checkin" name="checkin" min="^1^" required><br><br>
                <label for="checkout">Дата выезда:</label>
                    <input type="date" id="checkout" name="checkout" min="^2^" required><br><br>
                <label for="adults">Количество взрослых:</label>
                    <input type="number" id="adults" name="adults" min="1" max="4" required><br><br>
                <label for="children">Количество детей:</label>
                    <input type="number" id="children" name="children" min="0" max="4" required><br><br>
                <label for="email">Электронная почта:</label>
                    <input type="email" id="email" name="email" required><br><br>
                <label for="phone">Номер телефона:</label>
                    <input type="tel" id="phone" name="phone" required><br><br>
                <input type="submit" name="send" value="Забронировать">
            </form>
        </div>
    </div>
    </div>
</main>















        <footer>

            <div class="buttons1">
                <button class="b2">О нас</button>
                <button class="b2">Номера</button>
                <button class="b2">Новости</button>
                <button class="b2">Отзывы</button>
            </div>
            
            <div class="copir">
                ©OASIS
            </div>
        
            <div class="lf">
                <img class="LogoF" src="..//Assets/LOGO.png">
            </div>
        
        </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="../Java-Script/main.js"></script> 
</body>
</html>