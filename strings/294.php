<?php
$text = "Hello World, welcome to the World of php<br>";

echo str_replace("Hello", "Hey", $text);
echo str_ireplace("hello", "Hey", $text);
echo str_replace(["Hello", "welcome"], "Hey", $text);
echo str_replace(["World"], ["Earth", "earth"], $text);
echo str_replace(["World", "php"], ["Earth", "programming"], $text, $times);
echo $times;
