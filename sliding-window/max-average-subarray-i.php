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
 * You are given an integer array `nums` consisting of `n` elements, and an integer `k`.
 *
 * Find the contiguous subarray of length `k` that has the maximum average value,
 * and return **this value as a float**.
 *
 * You must solve the problem in `O(n)` time complexity.
 *
 * 🔧 Function Signature:
 * function findMaxAverage(array $nums, int $k): float
 *
 * 🧪 Example 1:
 * Input: nums = [1, 12, -5, -6, 50, 3], k = 4
 * Output: 12.75
 * Explanation: Subarray [12, -5, -6, 50] has sum = 51, average = 12.75
 *
 * 🧪 Example 2:
 * Input: nums = [5], k = 1
 * Output: 5.0
 *
 * 🔐 Constraints:
 * - `1 <= k <= nums.length <= 10^5`
 * - `-10^4 <= nums[i] <= 10^4`
 *
 * 💡 Idea:
 * This is a typical Sliding Window (Fixed Size) problem.
 * Instead of calculating the sum for every subarray, use a window of size `k`,
 * add the new element and subtract the old one to keep updating the sum efficiently.
 * After each window movement, compute the average and update the max average if it's larger.
 */


function findMaxAverage(array $nums, int $k): float{
    $windowSum = 0;

    for ($i = 0; $i < $k; $i++){
        $windowSum += $nums[$i];
    }

    $maxAverage = $windowSum / $k;

    for ($i = $k; $i < count($nums); $i++){
        $windowSum += $nums[$i] - $nums[$i -$k];
        $currentAverage = $windowSum / $k;
        $maxAverage = max($maxAverage, $currentAverage);
    }

    return $maxAverage;
}

 echo(findMaxAverage([1, 12, -5, -6, 50, 3], 4)); // Output: 12.75
 echo("<br>");
 echo(findMaxAverage([5], 1)); // Output: 5.0

