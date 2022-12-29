<?php


//ARRAYS

$numbers = [1,2,3,4];

$person = [
  'firstName' => 'Kingsley',
  'lastName' => 'Coman',
   'age' => 24
];

$people = [
    [
        'firstName' => 'Jamal',
        'lastName' => 'Musiala',
         'age' => 21
    ],
    [
        'firstName' => 'Sadio',
        'lastName' => 'Mane',
        'age' => 28
    ],
    [
        'firstName' => 'Leroy',
        'lastName' => 'Sane',
        'age' => 24
    ]
];

echo $person['age'].'<br>';
echo $people[2]['firstName'].'<br><br>';

//looping arrays 
$posts = ['Post One', 'Post Two', 'Post Three'];

foreach($posts as $index => $post){
   echo $index + 1 .' - '.$post.'<br>';
}

echo '<br>';

//Looping Associative arrays
foreach($person as $key => $value){
   echo $key.' - '.$value.'<br>';
}