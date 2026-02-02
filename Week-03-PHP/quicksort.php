<?php

function quick_sort($unsorted_array){
    if(count($unsorted_array) <= 1){
        return $unsorted_array;
    }
    else{
        $pivot = $unsorted_array[0];
        $unsorted_array = array_splice($unsorted_array,1);
        $lesser = array();
        $greater = array();
        foreach($unsorted_array as $value){
            if($value <= $pivot){
                array_push($lesser, $value);
            }
            else{
                array_push($greater, $value);
            }
        }
        return array_merge(quick_sort($lesser), array($pivot), quick_sort($greater));
    }
}


var_dump(quick_sort(array(2,3,1,-2,5,0,-3)));
?>