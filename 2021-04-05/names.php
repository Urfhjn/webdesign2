<?php 
$firstname = 'Jimmy';
$lastname = 'Sotto';
// $fullname = $firstname . ' ' . $lastname . ' Phd';
$fullname = "{$firstname} {$lastname}";
$fullname2 = "$lastname, {$firstname}";
$age = 24;
$message = "{$firstname} is {$age} years old.";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Fullname</title>
</head>
<body>

    <h1>Your fullname is: <?php echo $fullname; ?>. Welcome back.</h1>
    <h1>Your formal name is: <?php echo $fullname2; ?></h1>
    <h1><?php echo $message; ?></h1>

</body>
</html>