<?php
function add($num1, $num2, $num3)
{
  return $num1 + $num2 + $num3;
}

// $numbers is an array
function multi(...$numbers)
{
  print_r($numbers);
  echo "<br>";
  return array_product($numbers);
}

$numbers = [1, 2, 4];
echo add(...$numbers) . "<br>";
echo multi(...$numbers) . "<br>";
echo multi(1, 2, 4) . "<br>";
