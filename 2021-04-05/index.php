<?php  
$name = 'sally';    // string
$age = 19;          // int
$username = 'matthew';
$sum = 1 + 2 + 3;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hello World!</title>
</head>
<body>
    <p>Welcome, <em><?php echo $username; ?></em>!</p>

    <h1>My PHP data</h1>
    <ul>
        <li><?php echo $name; ?></li>
        <li><?php echo $age; ?></li>
        <li><?php echo $username; ?></li>
        <li><?php echo $sum; ?></li>
    </ul>

</body>
</html>