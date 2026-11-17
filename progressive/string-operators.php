<?php
$prefix = 'Thank you';
$name = 'Althea Tabugo';
$message = $prefix . ', ' . $name;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>String Operator</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>The CookieBites Store</h1>
        <h2><?= $name ?>'s Order</h2>
        <p><?= $message ?></p>
    </body>
</html>