<?php
function get_name() {
    $name = 'Melissa';
    return $name;
}
function get_students() {
    $myclass = array('Miguel', 'Robert', 'Noella', 'John');
    $html = '';
    foreach($myclass as $person) {
        $html .= "<li>{$person}</li>";
    }
    return $html;
}
function get_authors() {
    $myclass = array('David', 'Matthew', 'Samantha', 'Mike');
    $html = '';
    foreach($myclass as $person) {
        $html .= "<li>{$person}</li>";
    }
    return $html;
}

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <title>PHP Functions</title>
</head>
<body>
    <h2>
        <?php echo get_name(); ?>
        <?php echo get_name(); ?>
    </h2>
    <h3>People in class</h3>
    <ul>
        <?php echo get_students(); ?>
    </ul>
</body>
</html>
