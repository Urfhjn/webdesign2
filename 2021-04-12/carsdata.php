<?php
$colors = array('blue', 'orange', 'cyan', 'red');
$drinks = array('Pepsi', 'English Breakfast Tea', 'Starbucks', 'Boba Tea');


function simple_data($data_array, $author) {
    $html = '';
    foreach($data_array as $i) {
        $html .= "<div style='margin-bottom:40px;'>
            <h3>{$i}</h3>
            <p>{$author}</p>
        </div>";
    }
    return $html;
}

// snake case
// camel case
function get_cars() {
    $carsiwant = array(
        array(
            'name'=>'Bugatti Chiron Super Sport 300+',
            'topspeed'=>'304 MPH',
            'price'=>'$3.9 Million'
        ),
        array(
            'name'=>'Koenigsegg Jesko Absolut',
            'topspeed'=>'330 MPH',
            'price'=>'$2.8 Million'
        ),
        array(
            'name'=>'Hennessey Venom F5',
            'topspeed'=>'311 MPH',
            'price'=>'$1.8 Million'
        ),
    );
    return $carsiwant;
}

