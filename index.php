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
    <link rel="stylesheet" href="css/sections/main.css">
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
            <form action="/search.php" method="post" class="search-bar">
                <input type="text" name="search" id="search">
                <button type="submit" class="search-bar-button">S</button>
            </form>
        </div>
    </nav>

    <div class="body">

        <div class="hero">
            <img src="img/banner.png" alt="banner">
        </div>

        <div class="content">
            <h2 class="center">Top Categories</h2>
            <div class="categories-main">

                <a href="#" class="categories-main-card">
                    <img src="https://d30fs77zq6vq2v.cloudfront.net/files/shares/20231003/Category_Top%20(1).gif"
                        alt="Category">
                    <div class="center">Women</div>
                </a>
                <a href="#" class="categories-main-card">
                    <img src="https://d30fs77zq6vq2v.cloudfront.net/files/shares/20231003/Category_Top%20(1).gif"
                        alt="Category">
                    <div class="center">Women</div>
                </a>
                <a href="#" class="categories-main-card">
                    <img src="https://d30fs77zq6vq2v.cloudfront.net/files/shares/20231003/Category_Top%20(1).gif"
                        alt="Category">
                    <div class="center">Women</div>
                </a>
                <a href="#" class="categories-main-card">
                    <img src="https://d30fs77zq6vq2v.cloudfront.net/files/shares/20231003/Category_Top%20(1).gif"
                        alt="Category">
                    <div class="center">Women</div>
                </a>
                <a href="#" class="categories-main-card">
                    <img src="https://d30fs77zq6vq2v.cloudfront.net/files/shares/20231003/Category_Top%20(1).gif"
                        alt="Category">
                    <div class="center">Women</div>
                </a>
                <a href="#" class="categories-main-card">
                    <img src="https://d30fs77zq6vq2v.cloudfront.net/files/shares/20231003/Category_Top%20(1).gif"
                        alt="Category">
                    <div class="center">Women</div>
                </a>
                <a href="#" class="categories-main-card">
                    <img src="https://d30fs77zq6vq2v.cloudfront.net/files/shares/20231003/Category_Top%20(1).gif"
                        alt="Category">
                    <div class="center">Women</div>
                </a>
                <a href="#" class="categories-main-card">
                    <img src="https://d30fs77zq6vq2v.cloudfront.net/files/shares/20231003/Category_Top%20(1).gif"
                        alt="Category">
                    <div class="center">Women</div>
                </a>
                <a href="#" class="categories-main-card">
                    <img src="https://d30fs77zq6vq2v.cloudfront.net/files/shares/20231003/Category_Top%20(1).gif"
                        alt="Category">
                    <div class="center">Women</div>
                </a>
                <a href="#" class="categories-main-card">
                    <img src="https://d30fs77zq6vq2v.cloudfront.net/files/shares/20231003/Category_Top%20(1).gif"
                        alt="Category">
                    <div class="center">Women</div>
                </a>
                <a href="#" class="categories-main-card">
                    <img src="https://d30fs77zq6vq2v.cloudfront.net/files/shares/20231003/Category_Top%20(1).gif"
                        alt="Category">
                    <div class="center">Women</div>
                </a>
                <a href="#" class="categories-main-card">
                    <img src="https://d30fs77zq6vq2v.cloudfront.net/files/shares/20231003/Category_Top%20(1).gif"
                        alt="Category">
                    <div class="center">Women</div>
                </a>


            </div>

            <h2 class="center">Deals Zone</h2>

            <div class="deals">
                <a href="#" class="deals-card">
                    60% Off
                </a>
                <a href="#" class="deals-card">
                    60% Off
                </a>
                <a href="#" class="deals-card">
                    60% Off
                </a>
                <a href="#" class="deals-card">
                    60% Off
                </a>
            </div>
        </div>
    </div>

    </div>

    <div class="footer">
        <div>
            <h2>Useful Links</h2>
            <ul>
                <li>Contact us</li>
                <li>About us</li>
                <li>Work with us</li>
                <li>Sitemap</li>
            </ul>
        </div>
        <div>
            Copyright © 2025 <?php constant('WEBNAME'); ?> . All rights reserved.<br />
            Designed by <b><a href="http://waynedev.vercel.app" target="_blank" rel="noopener noreferrer">Wayne
                    Development</a></b>
        </div>
        <div>
            <h2>Socials</h2>
        </div>
    </div>
</body>

</html>