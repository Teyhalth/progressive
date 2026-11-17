<?php
$name = 'Althea Tabugo';
$price = 3;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Variables</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>The CookieBites Store</h1>
        <h2>Welcome <?php echo $name; ?></h2>
        <p>The cost of your cookie is $<?php echo $price; ?> per pack. </p>
    </body>
</html>