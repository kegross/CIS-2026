<?php

# positive/negative/zero example
function sign_of($number){
    if($number > 0){
        return "Positive!";
    }
    else if($number < 0){
        return "Negative!";
    }
    else{
        return "Zero!";
    }
}


# echo greeting (Adapt set timezone)
function greet_user($timezone){
    date_default_timezone_set($timezone);
    $hour = date("H");
    if($hour >= 6 and $hour <=12){
        return "Good Morning!";
    }
    else if($hour > 12 and $hour <= 16){
        return "Good Afternoon!";
    }
    else if($hour > 16 and $hour <= 24){
        return "Good Evening";
    }
    else{
        return "Hello, night owl";
    }
}


# Average numbers (Adapt: allow for any number of numbers)
function average($number_array, $isArithmatic=True){
    $number_of_numbers = count($number_array);
    if($isArithmatic){
        if($number_of_numbers == 0){
            return 0;
        }
        return array_sum($number_array)/$number_of_numbers;
    }
    else{
        
    }
}

# Count vowels in a string (Adapt: count any set of characters)
# Counts any set of characters in a string
function count_vowels($text, $set_of_chars=array("a","e","i","o","u")){
    $lower_text = strtolower($text);
    $vowel_count = 0;
    for($i=0;$i<strlen($lower_text);$i++){
        $character = $lower_text[$i];
        if(in_array($character, $set_of_chars)){
            $vowel_count++;
        }
    }
    return $vowel_count;
}

# turn string into NATO phonetic alphabet
# ex: "kiera" turns into  "Kilo India Echo Romeo Alfa"
# NEW FUNCTION: turns NATO to regular (input "Kilo India Echo Romeo Alfa" turns into "kiera")
$NATO_alphabet = array("a"=>"Alfa","b"=>"Bravo","c"=>"Charlie","d"=>"Delta","e"=>"Echo","f"=>"Foxtrot","g"=>"Golf","h"=>"Hotel","i"=>"India","j"=>"Juliett","k"=>"Kilo","l"=>"Lima","m"=>"Mike","n"=>"November","o"=>"Oscar","p"=>"Papa","q"=>"Quebec","r"=>"Romeo", "s"=>"Sierra","t"=>"Tango","u"=>"Uniform","v"=>"Victor","w"=>"Whiskey","x"=>"Xray","y"=>"Yankee","z"=>"Zulu");

function make_NATO($text){
    $lower_text = strtolower($text);
    $nato_string = "";
    global $NATO_alphabet;
    for($i=0;$i<strlen($lower_text);$i++){
        $character = $lower_text[$i];
        $nato_letter = $NATO_alphabet[$character];
        $nato_string = $nato_string . $nato_letter;
        if($i < (strlen($lower_text) - 1)){
            $nato_string = $nato_string . " ";
        }
    }
    return $nato_string;
}

function NATO_to_string($text){
    $lower_text = strtolower($text);
    $word_array = explode(" ",$lower_text);
    $output_text = "";
    foreach($word_array as $word){
        $letter = $word[0];
        $output_text = $output_text . $letter;
    }
    return $output_text;
}

# Determine if a number is a perfect number (number = sum of divisors < the number)
# Example: 6. Divisors: 1, 2, 3, 6. 1 + 2 + 3 = 6.

function is_perfect($number){
    $divisors = array();
    for($divisor = 1; $divisor < $number; $divisor++){
        if($number % $divisor == 0){
            array_push($divisors, $divisor);
        }
    }
    if(array_sum($divisors) == $number){
        return True;
    }
    else{
        return False;
    }
}

# Find the item that is repeated most in a list
# Ex: [1,2,3,4,5,5] should return 5, [1,2,2,2,3,4,5,5] should return 2

function most_repeated_value($input_array){
    $value_counts = array_count_values($input_array);
    $curr_most_repeated = NULL;
    $max = -1;
    foreach($value_counts as $item => $num){
        if($num > $max){
            $max = $num;
            $curr_most_repeated = $item;
        }
    }
    return $curr_most_repeated;
}

echo most_repeated_value(array("hello","hello","array",1,2,4,4,"hello"));

function main(){
    # all code goes here
    echo sign_of(0);
}

# main();
?>