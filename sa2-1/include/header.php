<?php
date_default_timezone_set('Asia/Manila');
// echo date('T');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- div.container>header.header>div.banner>h1{Predefined Functions}+p{This is a sample page for demonstrating the us of pre-defined functions in PHP}^nav.navigation>ul>li*4^^^main>section>h2{Index Page}+p+p^^footer.footer>p{&copy;2026 by Joseph Q. Calleja} -->
    <div class="container">
        <header class="header">
            <div class="banner">
                <h1>Predefined Functions</h1>
                <p>This is a sample page for demonstrating the us of pre-defined functions in PHP</p>
                <p><?= date('l, F d, Y h:m:s A') ?></p>
            </div>
        </header>
             <div class="menu">
                <li><a href = "information.php" style="font-size: 30px;"> Personal Information </a></li>
                <li><a href = "educattain.php" style="font-size: 30px;"> Educational Attainment </a></li>
            </div>