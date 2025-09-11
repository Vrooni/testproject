<?php
$fruits = ["apple", "banana", "orange"];
foreach ($fruits as $fruit) {
  echo "The fruit is $fruit<br>";
}

$matrix = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];

foreach ($matrix as $row) {
  foreach ($row as $num) {
    echo $num;
  }
}
echo "<br>";

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
foreach ($persons as $name => $details) {
  echo $name .  ": ";

  foreach ($details as $details => $value) {
    echo "$value ";
  }
  echo "<br>";
}
