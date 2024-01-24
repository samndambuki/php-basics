<?php
$age = 17;

if($age>=18){
    // echo 'You are old enough to vote';
}else{
    // echo 'Sorry, you are ot old enough to vote';
}

//F - Month, J - date of the month
//H- hour

// $t = date("F j H");
// echo $t;


$t = date('H');
if($t<12){
    // echo 'Good morning';
}
elseif($t<17){
    // echo 'Good afternoon';
}
else{
    // echo 'Good evening';
}

// $posts = ['First Post'];
// if(!empty($posts)){
//     echo 123;
// }else{
//     echo 'No posts';
// }

// echo !empty($posts) ? $posts[0] : 'No posts';

$favcolor = 'yellow';

switch($favcolor){
    case 'red':
        echo 'You favorite color is red';
        break;
    case 'blue':
        echo 'You favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
    echo 'Your favorite color is not red,green or blue';
}


