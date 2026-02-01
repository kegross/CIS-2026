<?php

function insertion_sort($unsorted_array){
    if(count($unsorted_array) <=1){
        return $unsorted_array;  // empty array or one item array is already sorted
    }
    else{
        $sorted_array = array($unsorted_array[0]);
        for($index=1; $index<count($unsorted_array); $index++){  // this loop iterates over the unsorted items
            $current_item = $unsorted_array[$index];  // this is the current item to be sorted
            foreach($sorted_array as $sorted_index => $sorted_value){  // this loop iterates over the sorted items - we want to find where we should insert the current item we're looking at!
                if($current_item <= $sorted_value){
                    // we're merging the items that should come before the current value (sorted_array up until the current index), the current value, then the items after the current index in the array
                    $sorted_array = array_merge(array_slice($sorted_array, 0, $sorted_index), array($current_item), array_slice($sorted_array, $sorted_index));
                    break;  //again, don't use break for everything! I shouldn't see it in your code without good justification
                }
                // This is needed because if the item belongs at the end of the list, it will never get inserted otherwise!
                // An elseif is used since we want to make sure we're at the end of the array and the item doesn't belong in the second to last slot
                elseif($sorted_index == (count($sorted_array)-1)){
                    // since the item goes at the end, we just push it on - technically array_push could have been used here
                    $sorted_array = array_merge($sorted_array, array($current_item));
                }
            }
        }
        return $sorted_array;
    }
}


var_dump(insertion_sort(array(2,3,1,-2,5,0,-3)));

?>