<?php
$numbers1 = [1, 2, 3, 4, 5];
array_walk($numbers1, "double");
print_r($numbers1);

function double(&$num)
{
  $num *= 2;
}
