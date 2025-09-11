<?php
$numbers = [1, 2, 3, 4];
$numbers = array_reverse($numbers);
print_r($numbers);
echo "<br>";

$numbers = [1, 2, 3, 4];
$numbers = array_reverse($numbers, true);
print_r($numbers);
echo "<br>";

$person = ["name" => "Markus", "age" => 2];
$person = array_reverse($person);
print_r($person);
echo "<br>";
