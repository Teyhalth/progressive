<?php
$best_sellers = ['Chocolate', 'Mints', 'Fudge',
    'Bubble gum', 'Strawberry', ]
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Indexed Arrays</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    </head>
    <body>
        <h1>The CookieBites Store</h1>
        <h2>Best Sellers</h2>
        <ul>
            <li><?php echo $best_sellers[0]; ?></li>
            <li><?php echo $best_sellers[1]; ?></li>
            <li><?php echo $best_sellers[2]; ?></li>
        </ul>
    </body>
</html>