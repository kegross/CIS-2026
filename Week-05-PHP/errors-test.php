<?php

#$array = array(1,2,3);

# $variable = $array[4];

#$variable = 3/0;

# var_dump($variable);

#echo "won't run";

function check_colors($liked_colors, $favorite_color){
    $loved_color = htmlentities($favorite_color);
    if(is_array($liked_colors)){
        if(!in_array($favorite_color, $liked_colors)){
            echo "what do you mean you love " . $loved_color . "? You don't even like it!";
        } else{
            echo "Thank you for following directions! " . $loved_color . " is a cool color!";
        }
    }
    else{
        echo "The input is messed up, please try again!";
    }
}


?>