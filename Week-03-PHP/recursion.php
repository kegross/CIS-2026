<?php

function fibonacci($n){
    if($n==0 or $n==1){
        return 1;
    }
    else{
        return fibonacci($n-1) + fibonacci($n-2);
    }
}

#echo fibonacci(5);

function digit_count($n){
    if($n < 10){
        return 1;
    }
    else{
        $new_num = floor($n/10);
        return 1 + digit_count($new_num);
    }
}

# echo digit_count(123456);

function collatz($n){
    echo $n;
    echo " ";
    if($n == 1){
        return;
    }
    elseif ($n % 2 == 0){
        return collatz($n/2);
    }
    else{
        return collatz(3*$n + 1);
    }
}

# collatz(45);
?>