<?php
$rand = new \Random\Randomizer();

echo $rand->getInt(1, 6) . "<br>";
echo $rand->getFloat(1.2, 6.6) . "<br>";
echo $rand->getBytes(16) . "<br>";
echo bin2hex($rand->getBytes(16)) . "<br>";

$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
echo $rand->getBytesFromString($chars, 16) . "<br>";

$fruits = ["banana", "apple", "cherry", "orange"];
print_r($rand->pickArrayKeys($fruits, 2));
echo "<br>";
$person = ["name" => "Markus", "age" => 2, "city" => "Berlin"];
print_r($rand->pickArrayKeys($person, 2));
echo "<br>";

print_r($rand->shuffleArray($person));
echo "<br>";

$text = "Hello World!";
echo $rand->shuffleBytes($text) . "<br>";
echo $rand->nextFloat() . "<br>";
echo $rand->nextInt() . "<br>";
