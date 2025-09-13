<?php
echo rand(0, 100) . "<br>";
echo mt_rand(0, 50) . "<br>";

$rand = new \Random\Randomizer();
echo $rand->getInt(0, 100) . "<br>";

$numbers = range(1, 49);
$numbers = array_slice($rand->shuffleArray($numbers), 0, 6);
echo "6 of 49: " . implode(" ", $numbers) . "<br>";
echo "Super number: " . $rand->getInt(1, 9);
