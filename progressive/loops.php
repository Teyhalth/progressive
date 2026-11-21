<?php

$price = 1.99;

$products = [
    'Chocolate' => 2.99,
    'Mints'  => 1.99,
    'Strawberry'  => 3.49,
];

$best_sellers = ['Chocolate', 'Mints', 'Strawberry'];
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Loops</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>

    <!-- 1. WHILE LOOP -->
    <h2>1. Prices for Multiple Packs (While Loop)</h2>
    <p>
        <?php
        $counter = 1;
        $packs = 5;
        while ($counter <= $packs) {
            echo $counter;
            echo ' packs cost $';
            echo $price * $counter;
            echo '<br>';
            $counter++;
        }
        ?>
    </p>

    <!-- 2. DO... WHILE LOOP -->
    <h2>2. Prices for Multiple Packs (Do...While Loop)</h2>
    <p>
        <?php
        $packs_do = 5;
        do {
            echo $packs_do;
            echo ' packs cost $';
            echo $price * $packs_do;
            echo '<br>';
            $packs_do--;
        } while ($packs_do > 0);
        ?>
    </p>

    <!-- 3. FOR LOOP (1 to 10) -->
    <h2>3. Prices for Multiple Packs (For Loop: 1 to 10)</h2>
    <p>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo $i;
            echo ' packs cost $';
            echo $price * $i;
            echo '<br>';
        }
        ?>
    </p>

    <!-- 4. FOR LOOP (Large Orders: 10 to 100) -->
    <h2>4. Prices for Large Orders (For Loop: 10 to 100)</h2>
    <p>
        <?php
        for ($i = 10; $i <= 100; $i = $i + 10) {
            echo $i;
            echo ' packs cost $';
            echo $price * $i;
            echo '<br>';
        }
        ?>
    </p>

    <!-- 5. FOREACH LOOP  -->
    <h2>5. Price List (Foreach Loop - Key &amp; Value)</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach ($products as $item => $item_price) { ?>
            <tr>
                <td><?= $item ?></td>
                <td>$<?= $item_price ?></td>
            </tr>
        <?php } ?>
    </table>

    <!-- 6. FOREACH LOOP - Values Only -->
    <h2>6. Best Sellers (Foreach Loop - Values Only)</h2>
    <?php foreach ($best_sellers as $product) { ?>
        <p><?= $product ?></p>
    <?php } ?>

</body>
</html>