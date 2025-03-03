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
    <nav>
        <ul class="sidebar">
            <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a href="#">Sell</a></li>
            <li><a href="#">Track Order</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Signup</a></li>
        </ul>
        <ul>
            <li class=""><a href="#">Pink Market</a></li>
            <li class="hideOnMobile"><a href="#">Sell</a></li>
            <li class="hideOnMobile"><a href="#">Track Order</a></li>
            <li class="hideOnMobile"><a href="#">Login</a></li>
            <li class="hideOnMobile"><a href="#">Signup</a></li>
            <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>
    </nav>
    <div class="main_body">
        <div class="search-wrapper">
            <form class="form-wrapper"action="">
                <input class="searchbar" type="text" placeholder="Search in Pink Market">
                <button type="submit">Find</button>
            </form>
        </div>

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
        <div class="categories-wrapper">
            <div class="categories">
                <div class="categories-div">
                    <img src="images/categories_img1.jpg" alt="">
                    <h2>Electronics</h2>   
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
        <div class="flash-sale-wrapper">
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
    <div class="jfu-sale-items">
        <div class="jfu-items">
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
