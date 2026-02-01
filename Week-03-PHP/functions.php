<?php

$x = "10";

function favorite_number_string($n){
    if(is_string($n) && is_numeric((int)$n)){
        global $x;
        echo "my favorite number is " . $x;
    }
}

favorite_number_string("7");

# var_dump(is_string(7));

function favorite_number($n){
    if(is_string((string)$n) && is_numeric($n)){
        echo "my favorite number is " . $n;
    }
}

favorite_number(42);


?>