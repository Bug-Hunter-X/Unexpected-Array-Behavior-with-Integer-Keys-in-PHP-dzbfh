# Unexpected Array Behavior with Integer Keys in PHP

This repository demonstrates a subtle bug in PHP related to how it handles integer keys in arrays. When using integer keys, PHP's loose typing can lead to unexpected behavior, especially when modifying arrays.

## The Bug
The `increment_array_value` function aims to increment a value in an array if the given key exists, initializing it to 0 if it doesn't. However, when integer keys are used, this function doesn't work as expected. It sometimes uses unexpected keys in the array

## Solution
The provided solution forces the key to be string. This way, we can prevent this unexpected behavior.