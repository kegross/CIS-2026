<?php

function sieve($max){
    // We start by making a list (array) of all values.
    // Here, I've chosen to have the index represent the number and the value represent whether it's (currently) identified as prime or not prime
    $numbers = array(FALSE, FALSE);
    for($i=2;$i<=$max;$i++){
        $numbers[$i] = True;  // Initially, all values are "uncovered" (marked prime)
    }
    // We're iterating through our list, looking for "uncovered" (true) values
    foreach($numbers as $number => $is_prime){
        if($is_prime){
            $multiplier = 2;  // This removes all multiples of the given number - an important piece to how the sieve works!
            while($number*$multiplier <= $max){
                $numbers[$number*$multiplier] = False;
                $multiplier++;
            }
        }
        if($number > sqrt($max)){  // We can stop at the square root. As mentioned, for a challenge: see if you can pick a better loop so that the break keyword isn't needed!
            break;
        }
    }
    return $numbers;
}


function print_sieve($number_array){
    foreach($number_array as $number => $is_prime){
        if($is_prime){
            echo $number;
            echo " ";
        }
    }
}


function main(){
    $sieve_array = sieve(10000);
    print_sieve($sieve_array);
}

main();

?>