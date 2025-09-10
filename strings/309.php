<?php
$arr = ["Hello", "World,", "welcome", "to", "the", "world", "of", "PHP"];
$text = implode(" ", $arr) . ".";
echo $text . "<br>";

echo $text[0] . "<br>";

echo strcmp("AB", "Ab") . "<br>";
echo strcasecmp("AB", "Ab") . "<br>";

sort($arr);
print_r($arr);
echo "<br>";

echo strlen($text) . "<br>";

echo strpos(strtolower($text), "world") . "<br>";
echo strrpos(strtolower($text), "world") . "<br>";

echo str_replace("PHP", "programming", $text) . "<br>";

echo substr($text, 0, 5) . "<br>";

echo strtolower($text) . "<br>";
echo strtoupper($text) . "<br>";

var_dump(trim("! ! Hello, World!!", " !"));
echo "<br>";
var_dump(ltrim("!!Hello, World!!", "!"));
echo "<br>";
var_dump(rtrim("!!Hello, World!!", "!"));
echo "<br>";

$arr = explode(", ", $text);
print_r($arr);
echo "<br>";
echo implode(" - ", $arr) . "<br>";

echo str_word_count($text) . "<br>";
echo substr_count($text, "World") . "<br>";
