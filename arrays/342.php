<?php
$numbers1 = [1, 2, 3, 4];
$numbers2 = [4, 5, 6];

$numbers = array_merge($numbers1, $numbers2);
print_r($numbers);
echo "<br>";

$numbers = array_merge_recursive($numbers1, $numbers2);
print_r($numbers);
echo "<br>";

$map1 = ["name" => "Hanna", "age" => "31"];
$map2 = ["name" => "Maria", "city" => "Berlin"];

$map = array_merge($map1, $map2);
print_r($map);
echo "<br>";

$map = array_merge_recursive($map1, $map2);
print_r($map);
echo "<br>";
