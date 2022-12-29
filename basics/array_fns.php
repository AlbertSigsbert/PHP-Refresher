<?php

$cars = ['BMW', 'Ferrari', 'Porsche'];

//length of array
echo count($cars);
echo '<br>';

//Search array
var_dump(in_array('BMW', $cars));
echo '<br>';

//Adding elements
//END
array_push($cars, 'Bugatti', 'Chevloret');
$cars[] = 'Lamborghini';

//BEGINNING
array_unshift($cars, 'Volkswaggen');


//Removing elements
array_pop($cars);
array_shift($cars);

//remove specific item
unset($cars[1]);

print_r($cars);