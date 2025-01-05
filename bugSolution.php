```php
<?php
function increment_array_value(&$arr, $key) {
  $key = (string)$key; // Cast the key to a string
  if (!isset($arr[$key])) {
    $arr[$key] = 0;
  }
  $arr[$key]++;
}

$myArray = [];
increment_array_value($myArray, 1);
increment_array_value($myArray, 1);
echo "Count: " . $myArray['1'] . "\n"; // Output: Count: 2

//Another example of the bug
$myArray = ['a'=>1];
increment_array_value($myArray, 'a');
echo "Count: " . $myArray['a'] . "\n"; //Output: Count: 2

?>
```