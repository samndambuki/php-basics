<?php

//global scope
$y = 12;

function registerUser($email){
    //using global scope in function scope
    // global $y;
    // echo $y;
    //function scope
    // $x = 10;
    // echo 'User registered';
    echo $email . ' registered';
}

// registerUser('Brad');


function sum($n1=4,$n2=5){
    return $n1 + $n2;
}

$addition = sum();
// echo $addition;


// echo $x;
// registerUser();


//anonymous function - not a named function
$subtract = function($n1,$n2){
    return $n1-$n2;
};

// echo $subtract(10,5);

//arrow function
$multiply = fn($n1,$n2)=>$n1*$n2;
echo $multiply(9,9);








