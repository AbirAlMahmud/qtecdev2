<?php

function searchInsertPosition($nums, $target) {
    $left = 0;
    $right = count($nums) - 1;

    while ($left <= $right) {
        $mid = (int)(($left + $right) / 2);
        
        if ($nums[$mid] == $target) {
            return $mid;
        } elseif ($nums[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return $left;
}


$nums1 = [1, 7, 3, 5, 6, 9, 15];
$target1 = 5;
sort($nums1);
echo searchInsertPosition($nums1, $target1) . "\n";

$nums2 = [5, 6, 1, 3];
$target2 = 2;
sort($nums2);
echo searchInsertPosition($nums2, $target2) . "\n";

$nums3 = [1, 3, 5, 6];
$target3 = 7;
sort($nums3);
echo searchInsertPosition($nums3, $target3) . "\n";