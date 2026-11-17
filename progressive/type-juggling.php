
<?php
    // CookieBites Store
    $items = '5';       // String
    $cost = 5;          // Integer

    // PHP automatically converts the string into a number
    $total = $items * $cost;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Type Juggling</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <h1>Welcome to CookieBites!</h1>
    <h2>Cookie Order Summary</h2>

    <p>Number of Cookie Packs: <?= $items ?></p>
    <p>Cost per Pack: $<?= $cost ?></p>
    <p>Total Cost: $<?= $total ?></p>


</body>
</html>
