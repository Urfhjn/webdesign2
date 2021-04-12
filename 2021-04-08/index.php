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
<!--        <li>--><?php //echo $html; ?><!--</li>-->
        <?php foreach($blogposts as $book): ?>
            <li>
                <?php echo $book['title']; ?>
                <?php echo $book['author']; ?>
            </li>
        <?php endforeach; ?>
    </ol>

    <?php include 'sidebar.php'; ?>

    <?php include 'footer.php'; ?>

</body>
</html>