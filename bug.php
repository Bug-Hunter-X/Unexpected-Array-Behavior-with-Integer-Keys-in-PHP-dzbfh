```php
<?php
function increment_array_value(&$arr, $key) {
  if (!isset($arr[$key])) {
    $arr[$key] = 0;
  }
  $arr[$key]++;
}

$myArray = [];
increment_array_value($myArray, 'count');
echo "Count: " . $myArray['count'] . "\n"; // Output: Count: 1
increment_array_value($myArray, 'count');
echo "Count: " . $myArray['count'] . "\n"; // Output: Count: 2

//Simulate the bug
$myArray = [];
increment_array_value($myArray, 1);
increment_array_value($myArray, 1);
echo "Count: " . $myArray[1] . "\n"; //Output: Count: 2

// Another example of the bug
$myArray = ['a'=>1];
increment_array_value($myArray, 'a');
echo "Count: " . $myArray['a'] . "\n"; //Output: Count: 2

?>
```