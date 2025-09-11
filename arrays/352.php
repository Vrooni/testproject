<?php
function add(...$numbers)
{
  return array_sum($numbers);
}

echo add(1, 2, 3) . "<br>";

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr = [...$arr1, ...$arr2, "add"];
print_r($arr);
echo "<br>";

echo $arr[6](1, 2, 3);
