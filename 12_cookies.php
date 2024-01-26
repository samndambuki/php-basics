<!-- cookies - mechanism for storing data in a remote browser and retrieving it when the user visits the site again -->

<?php

//set cookie 
setcookie('name','Sam',time()+86400 * 30);

//get the cookiie and use it

//check for the cookie
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

//delete cookie
setcookie('name','',time()-86400);
