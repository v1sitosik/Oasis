<?php
    require "db.php";
    if (isset($_POST['send'])) {
        if (trim($_POST['name']) == "" || trim($_POST['rating']) == "" || trim($_POST['message']) == "" || ($_POST['rating']>10 || $_POST['rating']<0))
        {
            $err = "Форма заполнена некоректнно!";
        } else {
        
    $koments = R::dispense('koments');
    $koments->name = $_POST['name'];
    $koments->rating = $_POST['rating'];
    $koments->message = $_POST['message'];
    $koments->date = date("d.m.Y");



        R::store($koments);
        header('location: feedback.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы</title>
    <link rel="icon" href="../Assets/LOGO1.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="..//CSS/feedback.css">
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
<h1 class="zag">Оставить отзыв</h1>
    <div class="main">
        <form action="" method="post" class="n">
            <p class="n1">Имя</p>
            <input type="text" name="name" class="nmain"><br>
            <p class="n1">Оценка 1-10</p>
            <input type="number" name="rating" class="nmain"><br>
            <p class="n1">Сообщение</p>
            <textarea type="text" name="message" class="nmain1"></textarea>
            <div style="clear:both"><br></div>
            <input type="submit" name="send" class="sub" >
            <?= '<div class="error" style="color: red">'.$err.'</div>' ?>
        </form>
</div>
<h1 class="zag">Отзывы</h1>

<?php $result = mysqli_query($con, "SELECT * FROM koments ORDER BY id");
while($row = mysqli_fetch_array($result)) { ?>

<div class="feed">
    <div class="koment">

        <img src="..//assets/avatar.png" class="ava">
        
        <div class="soder">
            
            <div class="name"><?= $row['name'] ?></div>
            <div class="rat"><?= $row['rating']?></div>
            <hr noshade color="brown">
            <div class="message"><?= $row['message']?></div>
        </div>
        <div class="dat"><?= $row['date'] ?></div>
    </div>
    

</div>
<?php } ?>

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