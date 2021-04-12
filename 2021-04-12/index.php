<?php
include 'carsdata.php';
$site_title = 'Cars I Want by 2024';
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <title><?php echo $site_title; ?></title>
</head>
<body>
    <h1><?php echo $site_title; ?></h1>

    <?php foreach(get_cars() as $car): ?>
        <div style="margin-bottom:40px;">
            <h2><?= $car['name'] ?></h2>
            <p><strong>Topspeed:</strong> <?= $car['topspeed']; ?></p>
            <p><strong>Price:</strong> <?= $car['price']; ?></p>
        </div>
    <?php endforeach; ?>

    <h2>Favorite colors</h2>
    <?php echo simple_data($colors, 'James'); ?>

    <h2>Favorite drinks</h2>
    <?php echo simple_data($drinks, 'Josh'); ?>

</body>
</html>
