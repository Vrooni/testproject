<?php
$fruits = ["apple", "banana", "orange"];
for ($i = 0; $i < count($fruits); $i++) {
  echo "The fruit is $fruits[$i]<br>";
}

$matrix = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];
for ($i = 0; $i < count($matrix); $i++) {
  $row = $matrix[$i];
  for ($j = 0; $j < count($row); $j++) {
    echo $row[$j];
  }
}
