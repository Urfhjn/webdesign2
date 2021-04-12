<?php 
$name = 'matthew';
$level = 100;
$total = 9.99;
$is_female = true;  // boolean
$noexistent = null; // null
$score = null;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Array demo</title>
</head>
<body>

    <h1>
    <?php
    // Array
    $students = array('noella', 'felix', 'robert', 'miguel', 12, false, 9.99);
    // $students[4] = 'Josh';
    $students[0] = 'Eugene';
    // $students[] = 'Ingrid';
    // echo $students[count($students) - 1];
    // echo $students[3];

    // Associative Array
    $user = array(
        'username'=>'Noella',
        'gender'=>'female',
        'level'=>12,
        'change'=>9.99,
    );
    echo $user['username'];
    echo $user['change'];
    ?>
    </h1>

</body>
</html>