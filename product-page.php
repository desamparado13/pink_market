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
        include 'nav.php'
    ?>
    <div class="product-wrapper">
        <div class="product-container">
            <div class="product-divider">
                <div class="left-divider">
                    <img src="images/item-img.png" alt="">
                    <h2><a href="">23 Sold</a></h2>
                    <h2><a href="">15 Ratings</a></h2>
                </div>
                <div class="right-divider">
                    <h1>Iphone 6s</h1> 
                    <h2>P400</h2>
                    <br>
                    <div class="quantity-container">
                        <button class="quantity-btn" id="decrease" onclick="updateQuantity(-1)">-</button>
                        <input type="number" id="quantity" value="1" min="1" readonly />
                        <button class="quantity-btn" id="increase" onclick="updateQuantity(1)">+</button>
                    </div>
                    <br>
                    <div class="buy-buttons">
                        <button><a href="checkout-page.php">Add to Cart</a></button>
                        <button><a href="checkout-page.php">Buy now</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>















</body>

<script>
    function updateQuantity(change) {
    const quantityInput = document.getElementById('quantity');
    let currentQuantity = parseInt(quantityInput.value);

    // Update quantity value
    currentQuantity += change;

    // Ensure the quantity does not go below 1
    if (currentQuantity < 1) {
        currentQuantity = 1;
    }

    quantityInput.value = currentQuantity;
    }
</script>

