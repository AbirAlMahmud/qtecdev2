I am using Binary Search
 
Calculate the midpoint index $mid as (int)(($left + $right) / 2).
If the value at index $mid in the sorted array $nums is equal to the target $target, return $mid as the index where the target is found.
If the value at index $mid is less than the target, update $left to $mid + 1 to search the right half of the array.
If the value at index $mid is greater than the target, update $right to $mid - 1 to search the left half of the array.
If the loop exits without finding the target, return $left
