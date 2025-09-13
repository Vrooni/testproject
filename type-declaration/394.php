<?php
function getPerson(?string $name): ?array
{
  if ($name === null) {
    return null;
  }

  $persons = [
    "Markus" => ["age" => 23, "city" => "Berlin"],
    "Susi" => ["age" => 19, "city" => "Hannova"]
  ];

  return $persons[$name];
}

var_dump(getPerson("Markus"));
echo "<br>";
var_dump(getPerson("Mum"));
echo "<br>";
var_dump(getPerson(null));
echo "<br>";
