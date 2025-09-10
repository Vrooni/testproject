<?php
$text = "Hello World, welcome to the World of php.";
echo substr_count($text, "World");
echo "<br>";

echo substr_count($text, "World", 10);
echo "<br>";

echo substr_count($text, "World", 0, 11);
echo "<br>";
