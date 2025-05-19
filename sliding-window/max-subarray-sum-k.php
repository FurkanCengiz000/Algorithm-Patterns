<?php

/**
 * 🔍 LeetCode Problem: Maximum Average Subarray I
 * https://leetcode.com/problems/maximum-average-subarray-i/
 *
 * ✅ Difficulty: Easy
 * ✅ Pattern: Sliding Window (Fixed Size)
 * ✅ Time Complexity: O(n)
 * ✅ Space Complexity: O(1)
 *
 * 🧩 Problem Description:
 * Given an integer array `nums` and an integer `k`,
 * find the maximum sum of any contiguous subarray of length `k`.
 *
 * 🔧 Function Signature:
 * function maxSubarraySum(array $nums, int $k): int
 *
 * 🧪 Example 1:
 * Input: nums = [1, 2, 3, 4, 5], k = 2
 * Output: 9
 * Explanation: Subarray [4, 5] has the maximum sum.
 *
 * 🧪 Example 2:
 * Input: nums = [5, -1, 2, 3, -2, 4], k = 3
 * Output: 6
 * Explanation: Subarray [2, 3, -2] or [3, -2, 4] or [5, -1, 2] all sum to 6
 *
 * 💡 Idea:
 * - Start by summing the first `k` elements → this is your initial window
 * - Slide the window forward one element at a time:
 *     Subtract the leftmost (outgoing) element and add the new (incoming) one
 *     Update max sum if current window is larger
 */


// function maxSubarraySum(array $nums, int $k): int
// {
//     $count = count($nums);
//     $sum = 0;

//     for ($i = 0; $i + $k <= $count; $i++) {
//         $temp_sum = 0;
//         for ($j = $i; $j < $i + $k; $j++) {

//             $temp_sum += $nums[$j];
//         }

//         if ($temp_sum > $sum) {
//             $sum = $temp_sum;
//         }
//     }

//     return $sum;
// }

function maxSubarraySum(array $nums, int $k): int
{
    $windowSum = 0;
    $maxSum = PHP_INT_MIN;

    // İlk pencereyi hazırla
    for ($i = 0; $i < $k; $i++) {
        $windowSum += $nums[$i];
    }

    $maxSum = $windowSum;

    // Kaydır pencereyi
    for ($i = $k; $i < count($nums); $i++) {
        $windowSum += $nums[$i] - $nums[$i - $k];
        $maxSum = max($maxSum, $windowSum);
    }

    return $maxSum;
}

echo (maxSubarraySum([1, 2, 3, 4, 5], 2)); // Output: 9
echo("<br>");
echo (maxSubarraySum([5, -1, 2, 3, -2, 4], 3)); // Output: 6
