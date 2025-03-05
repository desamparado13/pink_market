<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'nav.php'
    ?>

    <h1 style="text-align: center;">Items</h1>
    <div class="items-container">
        <div class="table_component" role="region" tabindex="0">
        <table>
            <caption>
                <p>Checkout</p>
            </caption>
            <thead>
                <tr>
                    <th>Products Ordered</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Item subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Iphone 6s</td>
                    <td>400</td>
                    <td>1</td>
                    <td>400</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <br>
    <div class="address-section">
        <div class="address-details">
            <h1>Address</h1>
            <h2>District 1, Brgy. 5, Agusan del Norte</h2>
            <h2>09260634628</h2>
            <h2>Christian Angelo</h2>
        </div>
    </div>
    <br>
    <div class="place-order-container">
        <div class="place-order-div">
            <h2>Shipping Cost: P50</h2>
            <h2>Order Total: P450</h2>
            <button style="padding:5px;cursor:pointer"><a href="done-page.php">Place Order</a></button>
        </div>
    </div>
    
</body>
</html>
