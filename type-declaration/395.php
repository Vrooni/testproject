<?php
function add(int|float $num1, int|float $num2): int|float
{
  return $num1 + $num2;
}

echo add(5, 3) . "<br>";
echo add(2.5, 3.5) . "<br>";
echo add(5, 3.5) . "<br>";
