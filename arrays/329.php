<?php
$matrix = array(
  array(1, 2, 3),
  array(4, 5, 6),
  array(7, 8, 9)
);

$matrix = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];

print_r($matrix);
echo "<br>";
echo $matrix[0][1];
echo "<br>";

$persons = array(
  "Markus" => array(
    "age" => 30,
    "hobby" => "cooking"
  ),
  "Anna" => array(
    "age" => 26,
    "hobby" => "painting"
  )
);

$persons = [
  "Markus" => [
    "age" => 30,
    "hobby" => "cooking"
  ],
  "Anna" => [
    "age" => 26,
    "hobby" => "painting"
  ]
];

print_r($persons);
echo "<br>";
echo $persons["Anna"]["age"];
