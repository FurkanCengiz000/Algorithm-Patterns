<?php

/**
 * 🔍 LeetCode Problem: Two Sum II - Input Array Is Sorted
 * https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/
 *
 * ✅ Difficulty: Medium
 * ✅ Pattern: Two Pointers
 * ✅ Time Complexity: O(n)
 * ✅ Space Complexity: O(1)
 *
 * 🧩 Problem Description:
 * Given a 1-indexed array of integers `numbers` that is already **sorted in non-decreasing order**,
 * find two numbers such that they add up to a specific target number.
 *
 * Return the indices of the two numbers **(1-based indexing)** as an integer array answer of size 2,
 * where `1 <= answer[0] < answer[1] <= numbers.length`.
 *
 * You may not use the same element twice.
 * You must use only constant extra space.
 *
 * 🧪 Example 1:
 * Input: numbers = [2,7,11,15], target = 9
 * Output: [1,2] // because 2 + 7 = 9
 *
 * 🧪 Example 2:
 * Input: numbers = [2,3,4], target = 6
 * Output: [1,3]
 *
 * 🧪 Example 3:
 * Input: numbers = [-1,0], target = -1
 * Output: [1,2]
 *
 * 💡 Idea:
 * Since the array is sorted, use the Two Pointers technique:
 * - Initialize one pointer at the beginning (left) and one at the end (right)
 * - Calculate the sum
 * - If sum is too small → move left pointer forward
 * - If sum is too big → move right pointer backward
 * - If sum equals target → return [left + 1, right + 1] (since it's 1-indexed)
 */

 function twoSumSorted(array $nums, int $target): array
 {

   $left = 0;
   $right = count($nums) - 1;

   while($left < $right)
   {
      $sum = $nums[$left] + $nums[$right];

      if ($sum === $target){
         return [$left + 1, $right + 1];
      } elseif ($sum > $target){
         $right--;
      } elseif ($sum < $target){
         $left++;
      }

   }

    return [];
 }

//  print_r(twoSumSorted([2,7,11,15], 9));
//  print_r(twoSumSorted([2,3,4], 6));
 print_r(twoSumSorted([-1,0], -1));
