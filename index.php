<!DOCTYPE html>
<link rel="icon" href="images/pink_market_icon.jpg">
<link rel="stylesheet" href="style.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink Market</title>
</head>
<body>
    <?php
        include "nav.php";
    ?>
    <div class="main_body">
        <div class="carousel-wrapper">
            <div id="carousel-items">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            </div>
                <div id="carousel-items" class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 4</div>
                            <img class="slide-images" src="images/ads_banner_1.jpg">
                    </div>
                    <div class="mySlides fade">
                    <div class="numbertext">2 / 4</div>
                        <img class="slide-images" src="images/ads_banner_2.jpeg">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 4</div>
                            <img class="slide-images" src="images/ads_banner_3.jpeg">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">4 / 4</div>
                            <img class="slide-images" src="images/ads_banner_4.jpeg">
                    </div>
                </div>
            <div id="carousel-items">
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
        <br>
            <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
        <br>
        <br>

        <h1 class="categories-header">Categories</h1>
        <br>
        <div class="categories-wrapper">
            <div class="categories">
                <div class="categories-div">
                    <a href="product-page.php"><img src="images/categories_img1.jpg" alt="">
                    <h2>Electronics</h2>  
                </a>
         
                </div>
                <div class="categories-div">
                    <img src="images/categories_img2.jpg" alt="">
                    <h2>Fashion and apparel</h2>
                </div>
                <div class="categories-div">
                    <img src="images/categories_img3.jpg" alt="">
                    <h2>Food</h2>
                </div>
                <div class="categories-div">
                    <img src="images/categories_img4.jpg" alt="">
                    <h2>Beauty and personal care</h2>
                </div>
                <div class="categories-div">
                    <img src="images/categories_img5.jpg" alt="">
                    <h2>Toys and accessories</h2>           
                </div>
            </div>
        </div>
        <br>
        <br>
        <h1 class="categories-header">Flash Sale</h1>
        <br>
        <div class="flash-sale-wrapper">
            <div class="flash-sale-items">
                <a href="">
                    <img src="images/item-img.png">
                    <h3>Iphone 14</h3>
                    <h2>P400.00</h2>
                    <h5>23 Sold</h5>              
                </a>
            </div>
            <div class="flash-sale-items">
                <img src="images/item-img.png">
                <h3>Iphone 14</h3>
                <h2>P400.00</h2>
                <h5>23 Sold</h5>
            </div>
            <div class="flash-sale-items">
                <img src="images/item-img.png">
                <h3>Iphone 14</h3>
                <h2>P400.00</h2>
                <h5>23 Sold</h5>
            </div>
            <div class="flash-sale-items">
                <img src="images/item-img.png">
                <h3>Iphone 14</h3>
                <h2>P400.00</h2>
                <h5>23 Sold</h5>
            </div>
            <div class="flash-sale-items">
                <img src="images/item-img.png">
                <h3>Iphone 14</h3>
                <h2>P400.00</h2>
                <h5>23 Sold</h5>
            </div>
            <div class="flash-sale-items">
                <img src="images/item-img.png">
                <h3>Iphone 14</h3>
                <h2>P400.00</h2>
                <h5>23 Sold</h5>
            </div>
            <div class="flash-sale-items">
                <img src="images/item-img.png">
                <h3>Iphone 14</h3>
                <h2>P400.00</h2>
                <h5>23 Sold</h5>
            </div>
            <div class="flash-sale-items">
                <img src="images/item-img.png">
                <h3>Iphone 14</h3>
                <h2>P400.00</h2>
                <h5>23 Sold</h5>
            </div>
            <div class="flash-sale-items">
                <img src="images/item-img.png">
                <h3>Iphone 14</h3>
                <h2>P400.00</h2>
                <h5>23 Sold</h5>
            </div>
        </div>

    <br>
    <br>
    <h1 class="categories-header">Just for you</h1>
    <br>
    <div class="jfu-sale-wrapper">
        <div class="jfu-sale-items">
            <a href="">
                <img src="images/item-img.png">
                <h3>Iphone 14</h3>
                <h2>P400.00</h2>
                <h5>23 Sold</h5>
            </a>
        </div>
        <div class="jfu-sale-items">
            <img src="images/item-img.png">
            <h3>Iphone 14</h3>
            <h2>P400.00</h2>
            <h5>23 Sold</h5>
        </div>
        <div class="jfu-sale-items">
            <img src="images/item-img.png">
            <h3>Iphone 14</h3>
            <h2>P400.00</h2>
            <h5>23 Sold</h5>
        </div>
    </div>




    <br>
    <br>

    </div>


























    <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }
        function hideSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }

                    let slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            }
    </script>
</body>
