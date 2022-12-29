<?php

//Normal functions
function printName($name){
    echo 'Name is: '.$name.'<br>';
}

printName('Rango');
echo '<br>';

//Anonymous fns
$add = function($n1, $n2){
    return $n1 + $n2;
};

echo 'Sum is: '. $add(1,2);
echo '<br><br>';


//Arrow fns
$multiply = fn($n1, $n2) => $n1 * $n2;
echo 'Product is: '. $multiply(1,2);