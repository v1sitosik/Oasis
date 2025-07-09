<?php
    require "libs/rb.php";
    R::setup('mysql:host=localhost;dbname=OASIS', 'root', '');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = mysqli_connect('localhost', 'root', '', 'OASIS');
?>