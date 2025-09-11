<?php
$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = ["uno", "dos", "tres", "quado", "fivo"];

$numbers1 = array_map("double", $numbers1, $numbers2);
print_r($numbers1);
echo "<br>";

$numbers1 = array_map(function ($num) {
  return $num / 2;
}, $numbers1);
print_r($numbers1);
echo "<br>";

function double($num, $name)
{
  echo "$num ($name)<br>";
  return $num * 2;
}
