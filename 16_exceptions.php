<?php

function inverse($x){
    if(!$x){
        throw new Exception('Division by 0');
    }
    return 1/$x;
}

// echo inverse(0);

try{
    echo inverse(5);
    echo inverse(0);
}catch(Exception $e){
    echo 'Caught Exception ', $e->getMessage(), ' ';
} finally{
    echo 'First finally';    
}

try{
    echo inverse(0);
}catch(Exception $e){
    echo 'Caught Exception ', $e->getMessage(), ' ';
} finally{
    echo 'Second finally';    
}


echo 'Hello world';
