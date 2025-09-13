<?php

function add($numbers)
{
  echo "args: " . func_num_args() . "<br>";
  return array_sum($numbers);
}

function multi()
{
  echo "args: " . func_num_args() . "<br>";
  $numbers = func_get_args();
  return array_product($numbers);
}

echo add([1, 2, 3]) . "<br>";
echo multi(1, 2, 4) . "<br>";
