# PHP Array Key Order Issue

This repository demonstrates a common PHP bug related to the unexpected behavior of array key ordering after using the `array_keys()` and `array_values()` functions.  The code showcases how the order of elements in an array can change in ways that lead to logic errors if the original array keys are not strictly numerical and contiguous from 0.

## Problem Description

The problem lies in assuming the original key order is maintained after calling `array_values()`. While `array_keys()` preserves order for non-numerical keys,  `array_values()` re-indexes the array with numerical keys 0, 1, 2, and so on. Thus, if you iterate through the keys and attempt to access elements from `array_values()` with the assumption of order, you might get unexpected results.

## Solution

The solution is to avoid relying on the order of elements in the array after using `array_values()`. If the original key-value association is important, use a different approach, such as using a `foreach` loop directly on the original array or a structure that preserves key-value pairs.