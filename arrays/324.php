<?php
$name = "Dennis";

// how to array it
$names = array($name);
print_r($names);
echo "<br>";

$names = $name;
settype($names, "array");
print_r($names);
echo "<br>";

unset($names);
$names[] = $name;
print_r($names);
echo "<br>";

// adds one element
$names[] = "Helga";
print_r($names);
echo "<br>";
