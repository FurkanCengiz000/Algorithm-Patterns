<?php

/**
 * 🔍 LeetCode Problem: Two Sum
 * https://leetcode.com/problems/two-sum/
 *
 * ✅ Difficulty: Easy
 * ✅ Pattern: Hash Table Lookup (Complement Pattern)
 * ✅ Time Complexity: O(n)
 * ✅ Space Complexity: O(n)
 *
 * 🧩 Problem Description:
 * Given an array of integers `nums` and an integer `target`,
 * return the indices of the two numbers such that they add up to `target`.
 *
 * You may assume that each input would have exactly one solution,
 * and you may not use the same element twice.
 *
 * You can return the answer in any order.
 *
 * 🧪 Example 1:
 * Input: nums = [2, 7, 11, 15], target = 9
 * Output: [0, 1] // because 2 + 7 = 9
 *
 * 🧪 Example 2:
 * Input: nums = [3, 2, 4], target = 6
 * Output: [1, 2]
 *
 * 🧪 Example 3:
 * Input: nums = [3, 3], target = 6
 * Output: [0, 1]
 *
 * 💡 Idea:
 * Use a hash map to store the index of each number.
 * For every number, check if `target - current number` exists in the map.
 * If it does, we have found the two numbers.
 */

function twoSum(array $nums, int $target): array
{
    $map = []; // num => index

    foreach ($nums as $index => $num) {
        $complement = $target - $num;

        if (isset($map[$complement])) {
            return [$map[$complement], $index];
        }

        $map[$num] = $index;
    }

    return []; // No solution (but problem guarantees one exists)
}

// 🧪 Example test
print_r(twoSum([2, 7, 11, 15], 9)); // Output: [0, 1]

?>
