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