<?php

$fruits= ['apples','orange','pear','banana'];

//Get length
// echo count($fruits);


//search array
// var_dump(in_array('apple',$fruits));


//add to an array
// $fruits = ['grape'];
//add to the end
// array_push($fruits,'banana');
//add to the beginning
// array_unshift($fruits,'mango');


foreach($fruits as $fruit){
    // echo $fruit;
}

//remove from an array - from the end
// array_pop($fruits);

//remove from the beginning
// array_shift($fruits);

//specific element gone
// unset($fruits[0]);

//split into 2 chunks


// print_r($fruits);
// $chunked_array = array_chunk($fruits,2);
// $print_r($chunked_array);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1,$arr2);
//spread operator
$arr4 = [...$arr1,...$arr2];

// print_r($arr3);
// print_r($arr4);
$a = ['green','red','yellow'];
$b = ['avocado','apple','banana'];


$c = array_combine($a,$b);
// print_r($c);


$keys = array_keys($c);
// print_r($keys);


$flipped = array_flip($c);
// print_r($flipped);


$numbers = range(1,20);
// print_r($numbers);

$newNumbers = array_map(function($number){
    return "Number ${number}"; 
},$numbers);

// print_r($newNumbers);


$lessThanTen = array_filter($numbers,fn($number)=>$number<10);
// print_r($lessThanTen);

$sum = array_reduce($numbers,fn($carry,$number)=>$carry+$number);
var_dump($sum);
