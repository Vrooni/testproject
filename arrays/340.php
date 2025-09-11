<?php
$numbers = [1, 2, 3, 4, 5];
// adds to end
array_push($numbers, 6, 7);
print_r($numbers);
echo "<br>";

// adds to beginning
array_unshift($numbers, -1, 0);
print_r($numbers);
echo "<br>";

// removes from end
array_pop($numbers);
print_r($numbers);
echo "<br>";

// removes from start
array_shift($numbers);
print_r($numbers);
echo "<br>";
