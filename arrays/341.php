<?php
// SLICE - don't change array
$numbers = [1, 2, 3, 4, 5];
$removed = array_slice($numbers, 2, 2);
print_r($numbers);
echo "<br>";
print_r($removed);
echo "<br>";

// keep indexes
$numbers = [1, 2, 3, 4, 5];
$removed = array_slice($numbers, 2, 2, true);
print_r($numbers);
echo "<br>";
print_r($removed);
echo "<br><br>";

//SPLICE - changes array
$numbers = [1, 2, 3, 4, 5];
$removed = array_splice($numbers, 2, 2);
print_r($numbers);
echo "<br>";
print_r($removed);
echo "<br>";

// keep indexes
$numbers = [1, 2, 3, 4, 5];
$removed = array_splice($numbers, 2, 2, ["banana", "apple"]);
print_r($numbers);
echo "<br>";
print_r($removed);
