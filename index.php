<?php
include './vars/_conf.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php constant('WEBNAME'); ?></title>
    <link rel="stylesheet" href="css/vars.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/sections/hero.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav>
        <div><a href="/">Logo</a></div>
        <div>
            <ul>
            <li><a href="/">Menu</a></li>
            <li><a href="/">Menu</a></li>
            <li><a href="/">Menu</a></li>
            <li><a href="/">Menu</a></li>
            <li><a href="/">Menu</a></li>
            <li><a href="/">Menu</a></li>
            </ul>
        </div>
        <div>
            <div class="search-bar">
                <input type="text" name="search" id="search"> 
            </div>
        </div>
    </nav>

    <div class="body">

        <div class="hero">
            <img src="img/banner.png" alt="banner">
        </div>
        
        <div class="content">
            this is awesome
        </div>
        
    </div>

    <div class="footer">
        This is footer
    </div>
</body>

</html>