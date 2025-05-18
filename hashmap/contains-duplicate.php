<?php

/**
 * 🔍 LeetCode Problem: Contains Duplicate
 * https://leetcode.com/problems/contains-duplicate/
 *
 * ✅ Difficulty: Easy
 * ✅ Pattern: Hash Set (Hash Table Lookup)
 * ✅ Time Complexity: O(n)
 * ✅ Space Complexity: O(n)
 *
 * 🧩 Problem Description:
 * Given an integer array `nums`, return `true` if any value appears **at least twice** in the array,
 * and return `false` if every element is distinct.
 *
 * 🧪 Example 1:
 * Input: nums = [1, 2, 3, 1]
 * Output: true
 *
 * 🧪 Example 2:
 * Input: nums = [1, 2, 3, 4]
 * Output: false
 *
 * 🧪 Example 3:
 * Input: nums = [1,1,1,3,3,4,3,2,4,2]
 * Output: true
 *
 * 💡 Idea:
 * Use a hash set to store seen elements.
 * While iterating the array, if a number is already in the set, return true.
 * Otherwise, add it to the set and continue.
 */

function containsDuplicate(array $nums): bool
{
    $seen = [];

    foreach ($nums as $num) {
        if (isset($seen[$num])) {
            return true; // Duplicate found
        }

        $seen[$num] = true;
    }

    return false; // No duplicates
}

// 🧪 Example tests
var_dump(containsDuplicate([1, 2, 3, 4])); // false
var_dump(containsDuplicate([1, 2, 3, 1])); // true

?>
