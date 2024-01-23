<?php
//simple array
$numbers = [1,44,55,22];
$fruits = array('apple','orange','pear');

// print_r($numbers);
// var_dump($numbers);
// echo $fruits[1];

//Associative array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

// echo $colors[4];


$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];


$person = [
    'first_name' => 'Sam',
    'last_name' => 'Ndambuki',
    'email' => 'sam@gmail.com'
];

// echo $person['first_name'];

//multi-dimensional array
$people = [
    [
        'first_name' => 'Sam',
        'last_name' => 'Ndambuki',
        'email' => 'sam@gmail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Chaser',
        'email' => 'john@gmail.com'
    ],
    [
        'first_name' => 'Kevin',
        'last_name' => 'Doe',
        'email' => 'kevin@gmail.com'
    ]
    ];

// echo $people[1]['email'];

var_dump(json_encode($people));

