<?php
class Solution
{
    /**
     * @param [] $numbers
     * @param Integer $target
     * @return []
     */
    function twoSum($numbers, $target)
    {
        $count = count($numbers);
        $left = 0;
        $right = $count - 1;
        while ($left < $right) {
            $sum = $numbers[$left] + $numbers[$right];
            if ($sum == $target) {
                return [$left + 1, $right + 1];
            } else if ($sum < $target) {
                ++$left;
            } else {
                --$right;
            }
        }
    }
}
