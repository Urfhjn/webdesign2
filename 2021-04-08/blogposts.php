<?php 

$blogposts = array(
    array(
        'title'=>'How to get rich quick',
        'author'=>'David'
    ),
    array(
        'title'=>'Domes of Fire',
        'author'=>'James'
    ),
    array(
        'title'=>'Object Oriented and Classical Software Engineering',
        'author'=>'Schach'
    ),
    array(
        'title'=>'Smarter Faster Better',
        'author'=>'Charles'
    )
);
$html = '';
foreach($blogposts as $book) {
    $html .= "<li>
            <h4>{$book['title']}</h4>
            <p>{$book['author']}</p>
          </li>";
};