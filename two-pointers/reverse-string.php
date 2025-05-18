<?php

/**
 * 🔍 LeetCode Problem: Reverse String
 * https://leetcode.com/problems/reverse-string/
 *
 * ✅ Difficulty: Easy
 * ✅ Pattern: Two Pointers
 * ✅ Time Complexity: O(n)
 * ✅ Space Complexity: O(1) → in-place!
 *
 * 🧩 Problem Description:
 * Write a function that reverses the input character array `s` **in-place**.
 *
 * You must do this by modifying the input array directly.
 * Do not allocate another array — use only constant extra memory.
 *
 * 🔧 Function Signature:
 * function reverseString(array &$s): void
 *
 * 🧪 Example 1:
 * Input:  ["h","e","l","l","o"]
 * Output: ["o","l","l","e","h"]
 *
 * 🧪 Example 2:
 * Input: ["H","a","n","n","a","h"]
 * Output: ["h","a","n","n","a","H"]
 *
 * 💡 Idea:
 * Use Two Pointers — one starting from the beginning (`left`) and one from the end (`right`)
 * Swap the characters at `left` and `right`, then move both pointers inward.
 * Repeat until `left >= right`.
 *
 * 🚫 Do NOT use: array_reverse(), strrev(), or any built-in reverse method.
 * 🚫 Do NOT return anything — modify the input array via reference (&).
 */


function reverseString(array &$s): void {
    $left = 0;
    $right = count($s) -1;

    while ($left < $right) {
        $tmp = $s[$left];
        $s[$left] = $s[$right];
        $s[$right] = $tmp;

        $left++;
        $right--;
    }

}

$array = ['h', 'e', 'l', 'l', 'o'];
reverseString($array);
print_r($array); // 👉 ["o", "l", "l", "e", "h"]