<?php

// for($x=5;$x<=10;$x++){
//     echo 'Number ' . $x . '<br>';
// }

// $x = 1;

// while($x<=15){
//     echo 'Number ' . $x . '<br>';
//     $x++;
// }


// $x = 1;

// do {
//     echo 'NUmber ' . $x . '<br>';
//     $x++;
// } while($x<=5);

// $posts = ['first post','second post','third post'];
// for($x=0;$x < count($posts);$x++){
//     echo $posts[$x];
// }

// foreach($posts as $index => $post){
//     echo $index . '-' . $post . '<br>';
// }

$person = [
    'first_name' => 'Brad',
    'last_name' => 'samuel',
    'email' => 'sam@gmail.com' 
];

foreach($person as $key=> $value){
    echo "$key - $value <br> ";
}





