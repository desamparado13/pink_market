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
            <form action="">
                <input class="searchbar" type="text" placeholder="Search in Pink Market">
                <button type="submit">Search</button>
            </form>
        </div>
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
    </script>
</body>
</html>
