<?php
$item = 'Chocolate';
$stock = 5;
$wanted = 3;
$deliver = true;
$can_buy = (($wanted <= $stock) && ($deliver == true));
?>
<!DOCTYPE html>
<html>
<head>
        <title>Echo Shorthand</title>
        <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The CookieBites Store</h1>
    <h2>Shopping Cart</h2>
    <p>Item: <?= $item ?></p>
    <p>Stock: <?= $stock ?></p>
    <p>Ordered: <?= $wanted ?></p>
    <p>Can buy: <?= $can_buy ?></p>
</body>
</html>