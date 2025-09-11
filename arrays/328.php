<?php
$persons = array(
  "name" => "Markus",
  "age" => 30,
  "hobby" => "cooking"
);

$persons = [
  "name" => "Markus",
  "age" => 30,
  "hobby" => "cooking"
];

print_r($persons);
echo "<br>";

unset($persons);
$persons["name"] = "Markus";
print_r($persons);
echo "<br>";

unset($persons["name"]);
print_r($persons);
echo "<br>";
