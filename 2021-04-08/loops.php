<?php
include 'blogposts.php';
$page_title = 'Top 4 Books for 2020';
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page_title; ?></title>
    <?php include 'head.php' ?>
</head>
<body>

    <?php include 'header.php'; ?>

    <h1><?php echo $page_title; ?></h1>
    <ol>
        <?php echo $html; ?>
    </ol>

    <?php include 'sidebar.php'; ?>

    <?php include 'footer.php'; ?>

</body>
</html>