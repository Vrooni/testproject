<?php
$fruits = ["Apfel", "Banane", "Kirsche", "Birne", "Orange"];
print_r($fruits);
echo "<br>";

array_push($fruits, "Grapefruit", "Traube");
print_r($fruits);
echo "<br>";

array_shift($fruits);
print_r($fruits);
echo "<br>";

array_unshift($fruits, "Papaya");
print_r($fruits);
echo "<br>";
echo "<br>";

$book = ["title" => "Leck mich doch", "autor" => "me", "price" => "1€"];
print_r($book);
echo "<br>";

$book["price"] = "Unbezahlbar";
print_r($book);
echo "<br>";

$book["year"] = "Never";
print_r($book);
echo "<br>";
echo "<br>";

$names = ["Thomas", "Dietrich", "Hildegard", "Günther", "Olaf"];
$marks = [1, 3, 1, 5, 6];
$schoolies = array_combine($names, $marks);
print_r($schoolies);
echo "<br>";
echo "<br>";

arsort($schoolies);
print_r($schoolies);
echo "<br>";

echo array_keys($schoolies)[0] . ": " . array_values($schoolies)[0];
