<?php

/**
 * Question: Given a sorted array of distinct integers and a target value, return the index if the target is found. If not, return the index where it would be if it were inserted in order. 
 * 
 */

/**
 * APPROACH -> Binary Search
 * 
 * Since the array is sorted, the first inference is that if the value at some index e.g 1 is less than the target, then there is no need to traverse the elements which are left to the index, as they would be automatically be smaller. Hence, we can use a Binary Search to traverse through the rest of the elements to find the Search Insert Position.
 * 
 * 
 * ANALOGY: While traversing the input array:
 * 
 * 1: If the target_element == current_element, then return the index of the current_element as the index position.
 * 
 * 2: If the target_element > current_element && target_element < next_element, then return the next index after the current_element as the index position. i.e current_element_index+1;
 * 
 * 3: If the target_element > current_element && current_element is the last_element in the input array, the return input_array_length as the index position.
 * 
 * 4: If the target_element < current_element && current element is the first_element in the input array, then return the start index as the index position i.e 0
 */


function searchInsert($array_input, $target_element) {
    if (array_search($target_element, $array_input) == false) {

        foreach ($array_input as $key => $dat) {
            if ($dat > $target_element) {
                return $key;
            }
            else if (($key+1) == count($array_input)) {
                return $key+1;
            }
        }
        return array_search($target_element, $array_input);
    }
    else {
        return array_search($target_element, $array_input);        
    }
}

//Driver Code....

// Declare the sorted array of integers
$arr = array(5, 6, 8, 9, 100);

//Specify the target element
$target = 4;

//Invoke the search
echo "\n Target Index: ". (int)searchInsert($arr, $target)."\n ";


?>