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
    <style>
.table_component {
    overflow: auto;
    width:75%;
    margin-left: auto;
    margin-right: auto;
}

.table_component table {
    border: 1px solid #dededf;
    height: 100%;
    width: 100%;
    table-layout: fixed;
    border-collapse: collapse;
    border-spacing: 1px;
    text-align: left;
}

.table_component caption {
    caption-side: top;
    text-align: left;
}

.table_component th {
    border: 1px solid #dededf;
    background-color: #eceff1;
    color: #000000;
    padding: 5px;
}

.table_component td {
    border: 1px solid #dededf;
    background-color: #ffffff;
    color: #000000;
    padding: 5px;
}
</style>
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
<div>Made with <a href="https://www.htmltables.io/" target="_blank">HTML Tables</a></div>
</div>

    </div>
    
</body>
</html>
